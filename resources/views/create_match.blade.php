@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card match" style="border: aliceblue;">
                <div class="card-header ">{{ __('add match') }}</div>

                <div class="card-body ">
  @if(Session::has('eror'))    <div class="alert alert-success" role="alert">
          {{ Session::get('eror') }}   </div>
          @endif

<form method="POST" action="{{route('match.store')}}" enctype="multipart/form-data">
    @csrf

     Cup <select name="cup" autocomplete="cup">
    <option value="ligue 1">ligue 1</option>
    <option value="champions league">champions league</option>
    <option value="amical ">amical </option>
    <option value="cup de france ">cup de france </option>
</select>
game_place:<select name="game_place" value="{{ old('game_place') }}" autocomplete="game_place">
    <option value="interior">interior</option>
    <option value="outside">outside</option>
</select>
      <input type="text" class="form-control" name="stadium" placeholder="stadium">
         <input type="text" class="form-control" name="rival_team"         placeholder="rival_team">
         <input type="datetime-local" class="form-control" name="time"         placeholder="time">
         <input type="file" id="file" class="form-control" name="logo_rival_team">

         <button type="submit" class="btn btn-primary">save</button></form>

        </div>
    </div></div></div>
    </div>

@endsection

