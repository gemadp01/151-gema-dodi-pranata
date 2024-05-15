<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-200">

    <header id="header">
        {{-- @yield('header') --}}
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>