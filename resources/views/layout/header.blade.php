<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

<header>
    @if (Session::get('nick') !== null)
        <span style="font-weight: bold;">
            Benvingut/a Mascota {{ Session::get('nick') }}
        </span><br>
        <a href="{{ route('logOut') }}">Sortir</a>
    @endif
        {{-- @dump(Auth::user()->username) --}}
        {{-- @if(isset(Auth::user()->username) && Auth::user()->username == 'user')
            <li class="nav-item fs-5 me-3">
                <a class="nav-link" href="{{ route('user.logout') }}">Log Out</a>
            </li>
        @endif --}}
</header>
