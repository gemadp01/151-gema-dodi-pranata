<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-200 min-h-screen flex flex-col">

    <header id="header" class="bg-white">
        <div class="container mx-auto flex justify-between">
            <h1>header</h1>
            <div class="w-1/2">
                <form action="">

                    <img src="{{ asset('assets/svg/search-alt-1-svgrepo-com.svg') }}" alt="Search Icon"
                        class="absolute top-[18px] left-[18px]">

                    <input type="text"
                        class="bg-gray-50 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-600 rounded-md block w-full appearance-none"
                        placeholder="Search product here...">

                </form>
            </div>
            <nav class="">
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            </nav>
        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="border border-red-500 bg-white">
        @yield('footer')
    </footer>
</body>

</html>