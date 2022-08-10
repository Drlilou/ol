<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Player;
use App\Match;

class players extends Controller
{
    public function create()
    {
        return view('create_player');

    }
    public function matchs()
    {
        $t= Player::select('*')
        ->paginate(2);

    return view('players')->with('data',$t);


    }

    protected function delet($id)
    {  $p = Player::find($id);
        if (!$p)
            return redirect()->back()->with(['error' => __('messages.pfe not exist')]);

        $p->delete();
        return redirect()
            ->route('players')
            ->with(['success' => 'player deleted successfully']);
    }
    protected function edit($id)
    {  $p = Player::find($id);
        if (!$p)
            return redirect()->back()->with(['error' => __('messages.pfe not exist')]);
            $p = Player::select()->find($id);
            return view('edit_player')->with('p',$p);
        }


        public function apdate(Request $request,$id)
        { $p = Player::find($id);
            if (!$p)
                return redirect()->back()->with(['error' => __('messages.pfe not exist')]);
                if ($request->img!='')
              {  $photo=$request->img;
                $path='images/players';
                $file_extension = $photo -> getClientOriginalExtension();
                $file_name = time().'.'.$file_extension;
                $photo -> move($path,$file_name);
             //   $request->img=$file_name;
                $p->update(['img' =>$file_name]);

            }
            $p->update(

            [
                'first_name' => $request->first_name,
                'position' => $request->position,
                'last_name' => $request->last_name,
                'birth_date' => $request->birth_date
               ]
        );


            return redirect()->back();
        }



    public function store(Request $request)
    {


        $rules = [
            'last_name' => 'required|max:100',
            'first_name' => 'required|max:100',
            'img' => 'required|max:100',
            'birth_date' => 'required',
      //      'birth_date' => 'required|befor:yesterday',
        ];


        $validator = Validator::make($request->all() ,$rules);
         if ($validator->fails()) {
         //    return redirect()->back()->withErrors($validator)->withInput($request->all());
            // return  $validator->errors()->first();
            return redirect()->back()->with(["eror"=>$validator->errors()->first()]);

        }

        $photo=$request->img;
        $path='images/players';
        $file_extension = $photo -> getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $photo -> move($path,$file_name);

            Player::create([
         'img' => $file_name,
         'first_name' => $request->first_name,
         'position' => $request->position,
         'last_name' => $request->last_name,
         'birth_date' => $request->birth_date
        ]);

return redirect('players');

    }



}
