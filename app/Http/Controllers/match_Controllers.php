<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Match;

class match_Controllers extends Controller
{

    public function create()
    {
        //view form to add this offer
        return view('create_match');

    }
    public function matchs()
    {
        //view form to add this offer
        $t= Match::select('*')
        ->paginate(2);

    return view('matchs')->with('data',$t);

        return view('create_match');

    }




    public function store(Request $request)
    {


        $rules = [
            'logo_rival_team' => 'required|max:100',
            'stadium' => 'required|max:100',
            'rival_team' => 'required|max:100',
            'time' => 'required|after:yesterday',
        ];



        $validator = Validator::make($request->all() ,$rules);
         if ($validator->fails()) {
         //    return redirect()->back()->withErrors($validator)->withInput($request->all());
            // return  $validator->errors()->first();
            return redirect()->back()->with(["eror"=>$validator->errors()->first()]);

        }
        $photo=$request->logo_rival_team;
        $path='images/matchs';
        $file_extension = $photo -> getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $photo -> move($path,$file_name);

        Match::create([
         'logo_rival_team' => $file_name,
         'cup' => $request->cup,
         'stadium' => $request->stadium,
         'rival_team' => $request->rival_team,
         'game_place' => $request->game_place,
         'time' => $request->time
        ]);



return redirect('matchs');




    }


    protected function delet($id)
    {  $p = Match::find($id);
        if (!$p)
            return redirect()->back()->with(['error' => __('matc not exist')]);
        $p->delete();
        return redirect()
            ->route('matchs')
            ->with(['success' => 'player deleted successfully']);
    }

    protected function edit($id)
    {  $p = Match::find($id);
        if (!$p)
            return redirect()->back()->with(['error' => __('match not exist')]);
            $p = Match::select()->find($id);
            return view('edit_match')->with('p',$p);
        }

        public function apdate(Request $request,$id)
        { $p = Match::find($id);

       // return $request->logo_rival_team;
            if (!$p)
                return redirect()->back()->with(['error' => __('messages.pfe not exist')]);
                if ($request->logo_rival_team!='')
              {  $photo=$request->logo_rival_team;
                $path='images/matchs';
                $file_extension = $photo -> getClientOriginalExtension();
                $file_name = time().'.'.$file_extension;
                $photo -> move($path,$file_name);
             //   $request->img=$file_name;
                $p->update(['logo_rival_team' =>$file_name]);


            }
            $p->update(

            [
                'cup' => $request->cup,
                'stadium' => $request->stadium,
                'rival_team' => $request->rival_team,
                'game_place' => $request->game_place,
                'time' => $request->time
               ]
        );






            return redirect()->back();
        }






}
