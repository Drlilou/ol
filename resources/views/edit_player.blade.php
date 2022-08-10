@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card match" style="border: aliceblue;">
                <div class="card-header ">{{ __('Edit player') }}</div>

                <div class="card-body ">
  @if(Session::has('eror'))    <div class="alert alert-success" role="alert">
          {{ Session::get('eror') }}   </div>
          @endif

<form method="POST" action="{{route('player.apdate',$p['id'])}}" enctype="multipart/form-data">
    @csrf

     <input type="text" class="form-control" value="{{ $p['first_name'] }}" name="first_name" placeholder="first_name">
     <input type="text" class="form-control" value="{{ $p['last_name'] }}"  name="last_name" placeholder="last_name">
     <input type="date" class="form-control" value="{{ $p['birth_date'] }}"  name="birth_date" placeholder="birth_date">
     Cup <select name="position" autocomplete="position">
    <option value="gardian"
   @if($p['birth_date']=='gardian')
   selected
   @endif
    >gardian</option>
    <option value="defanceur"
    @if($p['birth_date']=='defanceur')
    selected
    @endif
    >defanceur</option>
    <option value="attaquant"
    @if($p['birth_date']=='attaquant')
    selected
    @endif
    >attaquant</option>
</select>

         <input type="file" id="file" class="form-control"   name="img">

         <button type="submit" class="btn btn-primary">save</button></form>

        </div>
    </div></div></div>
    </div>

@endsection

