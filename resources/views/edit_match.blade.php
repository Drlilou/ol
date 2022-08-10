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

<form method="POST"
action="{{route('match.apdate',$p['id'])}}"
enctype="multipart/form-data">
    @csrf

     Cup <select name="cup"  value="{{ $p['cup'] }}"autocomplete="cup">
    <option value="ligue 1"
    @if($p['cup']=='ligue 1')
    selected
    @endif
    >ligue 1</option>
    <option value="champions league"
    @if($p['cup']=='champions league')
    selected
    @endif
    >champions league</option>
    <option value="amical"
    @if($p['cup']=='amical')
    selected
    @endif
    >amical </option>
    <option value="cup de france"
    @if($p['cup']=='cup de france')
    selected
    @endif
    >cup de france </option>
</select>
game_place:<select name="game_place" value="{{ $p['id'] }}" autocomplete="game_place">
    <option value="interior"
    @if($p['game_place']=='interior')
    selected
    @endif

    >interior</option>
    <option value="outside"
    @if($p['game_place']=='outside')
    selected
    @endif
    >outside</option>
</select>
      <input type="text" class="form-control" name="stadium"  value="{{ $p['stadium'] }}" placeholder="stadium">
         <input type="text" class="form-control" name="rival_team"    value="{{ $p['rival_team'] }}"     placeholder="rival_team">
         <input type="datetime-local" class="form-control" name="time"    value="{{ $p['time'] }}"     placeholder="time">
         <input type="file" id="file" class="form-control"  name="logo_rival_team">
         <button type="submit" class="btn btn-primary">save</button></form>
        </div>
    </div></div></div>
    </div>
@endsection

