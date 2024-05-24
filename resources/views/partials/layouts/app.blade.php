<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-200 min-h-screen flex flex-col">

    <header id="header" class="bg-white">

        <nav
            class="relative px-4 py-2 flex justify-between items-center bg-white sm:justify-around lg:justify-between lg:px-20 2xl:justify-around">

            {{-- Logo --}}
            <a class="text-2xl font-bold text-violet-600" href="/">
                Simple-Ecommerce
            </a>

            {{-- Hamburger menu --}}
            <div class="lg:hidden">
                <button class="navbar-burger flex items-center text-violet-600 p-1" id="navbar_burger">
                    <svg class="block h-6 w-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Hamburger menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>

            {{-- Search bar --}}
            <ul
                class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:items-center lg:w-auto lg:space-x-6">

                <li>
                    <div class="relative text-gray-600">
                        <input
                            class="border border-gray-300 placeholder-current h-10 px-5 pr-10 rounded-lg text-sm focus:outline-none"
                            type="search" name="search" placeholder="Search">

                        <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                xml:space="preserve" width="512px" height="512px">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>

                    </div>
                </li>
            </ul>

            {{-- Container --}}
            <div class="hidden lg:flex">

                {{-- Cart button --}}
                <button id="cart-toggle" type="button"
                    class="hidden lg:inline-block lg:ml-auto py-1.5 px-3 m-1 text-center rounded-md hover:bg-gray-100">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>

                </button>

                @if (!Request::path('/login'))
                <span class="border-r border-gray-300 rounded mx-7 my-3"></span>

                {{-- Sign up button --}}
                <a class="py-1.5 px-3 m-1 text-center border border-violet-700 rounded-md text-violet-700  hover:bg-gray-100 hidden lg:inline-block "
                    href="#">
                    Sign Up
                </a>

                {{-- Sign In Button --}}
                <a href="#"
                    class=" py-1.5 px-3 m-1 text-center bg-violet-700 border rounded-md text-white  hover:bg-violet-500 hover:text-gray-100 hidden lg:block">
                    Sign in
                </a>

            </div>
            @endif

        </nav>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="border border-red-500 bg-white">
        <div class="bg-white px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="sm:col-span-2">
                    <a href="/" class="inline-flex items-center">

                        <span class="text-xl font-bold tracking-wide text-gray-800 uppercase">Footer</span>
                    </a>
                    <div class="mt-6 lg:max-w-sm">
                        <p class="text-sm text-gray-800">
                            Your online shopping is here!
                        </p>
                    </div>
                </div>
                <div class="space-y-2 text-sm">
                    <p class="text-base font-bold tracking-wide text-gray-900">Contacts</p>
                    {{-- <div class="flex">
                        <p class="mr-1 text-gray-800">Phone:</p>
                        <a href="tel:850-123-5021" aria-label="Our phone" title="Our phone"
                            class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">850-123-5021</a>
                    </div>
                    <div class="flex">
                        <p class="mr-1 text-gray-800">Email:</p>
                        <a href="mailto:info@lorem.mail" aria-label="Our email" title="Our email"
                            class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">info@lorem.mail</a>
                    </div>
                    <div class="flex">
                        <p class="mr-1 text-gray-800">Address:</p>
                        <a href="https://www.google.com/maps" target="_blank" rel="noopener noreferrer"
                            aria-label="Our address" title="Our address"
                            class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">
                            312 Lovely Street, NY
                        </a>
                    </div> --}}
                </div>
                <div>
                    <span class="text-base font-bold tracking-wide text-gray-900">Thanks to</span>
                    {{-- <div class="flex items-center mt-1 space-x-3">
                        <a href="/"
                            class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z">
                                </path>
                            </svg>
                        </a>
                        <a href="/"
                            class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                            <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                                <circle cx="15" cy="15" r="4"></circle>
                                <path
                                    d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z">
                                </path>
                            </svg>
                        </a>
                        <a href="/"
                            class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z">
                                </path>
                            </svg>
                        </a>
                    </div> --}}
                    <ul>
                        <li>
                            <a href="https://tailwindflex.com/" class="mt-4 text-sm text-gray-500" target="_blank"
                                target="_blank" rel="noopener noreferrer" aria-label="Tailwind Flex"
                                title="TailwindFlex">
                                TailwindFlex
                            </a>
                        </li>
                        <li>
                            <a href="https://www.freepik.com/free-psd/shopping-vertical-background_43119724.htm#query=cart&position=10&from_view=keyword&track=sph&uuid=13f9b7b9-54a1-4727-b124-723794cc281e"
                                class="mt-4 text-sm text-gray-500" target="_blank" target="_blank"
                                rel="noopener noreferrer" aria-label="Freepik" title="Freepik">
                                Freepik
                            </a>
                        </li>
                        <li>
                            <a href="https://www.svgrepo.com/" class="mt-4 text-sm text-gray-500" target="_blank"
                                target="_blank" rel="noopener noreferrer" aria-label="SVGRepo" title="SVGRepo">
                                SVGRepo
                            </a>
                        </li>
                        <li>
                            <a href="https://www.flaticon.com/" class="mt-4 text-sm text-gray-500" target="_blank"
                                target="_blank" rel="noopener noreferrer" aria-label="Flaticon" title="Flaticon">
                                Flaticon
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row">
                <p class="text-sm text-gray-600">
                    © Copyright 2024. 151 - Gema Dodi Pranata.
                </p>
                {{-- <ul class="flex flex-col mb-3 space-y-2 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row">
                    <li>
                        <a href="/"
                            class="text-sm text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">F.A.Q</a>
                    </li>
                    <li>
                        <a href="/"
                            class="text-sm text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Privacy
                            Policy</a>
                    </li>
                    <li>
                        <a href="/"
                            class="text-sm text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Terms
                            &amp; Conditions</a>
                    </li>
                </ul> --}}
            </div>
        </div>
    </footer>
</body>

</html>