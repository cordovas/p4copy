<nav>
    <ul class="nav justify-content-center">
        @foreach(config('app.nav') as $link => $label)
            <li class="nav-item">
                @if(Request::is(substr($link, 1)))
                    {{ $label }}
                @else
                    <a class="nav-link active" href='{{ $link }}'>{{ $label }}</a>
                @endif
            </li>
        @endforeach
    </ul>
</nav>