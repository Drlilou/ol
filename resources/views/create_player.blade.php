@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card match" style="border: aliceblue;">
                <div class="card-header ">{{ __('add player') }}</div>

                <div class="card-body ">
  @if(Session::has('eror'))    <div class="alert alert-success" role="alert">
          {{ Session::get('eror') }}   </div>
          @endif

<form method="POST" action="{{route('player.store')}}" enctype="multipart/form-data">
    @csrf

     <input type="text" class="form-control" name="first_name" placeholder="first_name">
     <input type="text" class="form-control" name="last_name" placeholder="last_name">
     <input type="date" class="form-control" name="birth_date" placeholder="birth_date">
     Cup <select name="position" autocomplete="position">
    <option value="gardian">gardian</option>
    <option value="defanceur">defanceur</option>
    <option value="attaquant">attaquant</option>
</select>

         <input type="file" id="file" class="form-control" name="img">

         <button type="submit" class="btn btn-primary">save</button></form>

        </div>
    </div></div></div>
    </div>

@endsection

