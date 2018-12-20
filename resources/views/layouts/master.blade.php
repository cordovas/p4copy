<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', config('app.name'))</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet"
          href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css') }}"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <link href="{{ asset('css/main.css') }}" rel='stylesheet'>


    @stack('head')
</head>
<body>

<header>

    <header class="page-header">
        <h1>Delete Fox News</h1>
        @include('modules.nav')
    </header>

</header>

<section>
    @yield('content')
</section>

<p>

<footer>
    &copy; {{ date('Y') }}
</footer>


</body>
</html>