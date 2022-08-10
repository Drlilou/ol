@extends('layouts.app')

@section('content')

</li>
@if (Route::has('login'))
    @auth


            <div class="col-lg-12 mb-4 ">

                <a  href="{{ route('match.add') }}"class="nav-link">

                <button type="button" class="btn btn-info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
    </svg>
                    ADD
                  </button>
                  </a>
                </div>

    @endauth
@endif

@foreach ($data as $user)

@if ($user['game_place']=='interior')
<div class="col-lg-6 mb-4 ">
    <div class=" match1  ">

      <div class="widget-body">
          <div class="widget-vs">
            <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
              <div class="team-1 text-center">
                <img  style="width: 90px; height: 90px;"
                src="images/ol.png" alt="Image"

                >
                <h3>Olympique lyonnais</h3>
              </div>
              <div>
                <span class="vs"><span>VS</span></span>
              </div>
              <div class="team-2 text-center">
                <img style="width: 90px; height: 90px;"
                src="{{asset('images/matchs/'.$user['logo_rival_team'])}}"
                >
                <h3>{{  $user['rival_team']}}</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="text-center widget-vs-contents mb-4">
          <h4>{{$user['cup']}}</h4>
          <p class="mb-5">

            <span class="d-block">{{ $user['time'] }}</span>
            <strong class="text-primary">{{  $user['stadium']}}</strong>
          </p>

        </div>


 @if (Route::has('login'))
                        @auth

                            <a  href="{{
                                route('match.delet',$user['id'])
                              }}"class="nav-link"  onclick="return confirm('Etes-vous sûr?');">
                                  <button type="button" class="btn btn-danger"
                                  style="
                                  margin-left: 23px;
                              "
                                  >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                                        <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                                      </svg>
                          delet
                                    </button>
                                    </a>


                                    <a  href="{{
                                      route('match.edit',$user['id'])
                                    }}"class="nav-link" >
                                      <button type="button" class="btn btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"></path>
                                          </svg>
                                          Edit
                                        </button>
                                        </a>


                        @endauth
                    @endif
    </div>

  </div>
@else
<div class="col-lg-6 mb-4 ">
    <div class=" match1  "  >
      <div class="widget-body">
          <div class="widget-vs">
            <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
              <div class="team-1 text-center">
                <img  style="width: 90px; height: 90px;"
                src="{{asset('images/matchs/'.$user['logo_rival_team'])}}"
                >
                <h3>{{  $user['rival_team']}}</h3>
              </div>
              <div>
                <span class="vs"><span>VS</span></span>
              </div>
              <div class="team-2 text-center">

                <img  style="width: 90px; height: 90px;"
                src="images/ol.png" alt="Image"

                >
                <h3>Olympique lyonnais</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="text-center widget-vs-contents mb-4">
          <h4>{{$user['cup']}}</h4>
          <p class="mb-5">

            <span class="d-block">{{ $user['time'] }}</span>
            <strong class="text-primary">{{  $user['stadium']}}</strong>
          </p>

        </div>
        @if (Route::has('login'))
        @auth

            <a  href="{{
                route('match.delet',$user['id'])
              }}"class="nav-link"  onclick="return confirm('Etes-vous sûr?');">
                  <button type="button" class="btn btn-danger"
                  style="
                  margin-left: 23px;
              "
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                        <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                      </svg>
          delet
                    </button>
                    </a>


                    <a  href="{{
                      route('match.edit',$user['id'])
                    }}"class="nav-link" >
                      <button type="button" class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"></path>
                          </svg>
                          Edit
                        </button>
                        </a>


        @endauth
    @endif
    </div>
  </div>

@endif
@endforeach
<div class="d-flex justify-content-center col-lg-12">
{!!  $data -> links() !!}
</div>
@endsection

