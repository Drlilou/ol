@extends('layouts.app')

@section('content')

</li>
@if (Route::has('login'))
    @auth

        <div class="col-lg-12 mb-4 ">

            <a  href="{{ route('player.add') }}"class="nav-link">

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

<div class="col-lg-6">
    <div class="custom-media d-flex">
      <div class="img mr-4">
        <img src="{{asset('images/players/'.$user['img'])}}" alt="Image" class="img-fluid">
      </div>
      <div class="text">
        <span class="meta">{{ $user['birth_date'] }}</span>
        <h3 class="mb-4"><a href="#">{{ $user['first_name'] }} {{ $user['last_name'] }}</a></h3>
        <p>position: {{ $user['position'] }}</p>
      </div>

            </div>


                        @if (Route::has('login'))
                        @auth

                            <a  href="{{
                                route('player.delet',$user['id'])
                              }}"class="nav-link"  onclick="return confirm('Etes-vous sûr?');">
                                  <button type="button" class="btn btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                                        <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                                      </svg>
                          delet
                                    </button>
                                    </a>


                                    <a  href="{{
                                      route('player.edit',$user['id'])
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
@endforeach

<br>
<div class="d-flex justify-content-center col-lg-12"
style="
margin-top: 19px;
">
{!!  $data -> links() !!}
</div>


@endsection

