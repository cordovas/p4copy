<nav>
    <ul class="nav justify-content-center">
        @foreach(config('app.nav'.Auth::check()) as $link => $label)
            <li class="nav-item"><a class="nav-link active"
                                    href='{{ $link }}'
                                    class='{{ Request::is(substr($link, 1)) ? 'active' : '' }}'>{{ $label }}</a>
        @endforeach

        @if(Auth::check())
            <li class="nav-item">
                <form method='POST' id='logout' action='/logout'>
                    {{ csrf_field() }}
                    <a class="nav-link active" href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
                </form>
            </li>
        @endif
    </ul>
</nav>