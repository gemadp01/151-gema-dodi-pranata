@extends('partials.layouts.app')

@section('content')

<div class="py-32">
    <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
        <div class="w-full p-8 lg:pt-36 lg:px-8 lg:w-1/2">
            <h2 class="text-2xl font-semibold text-gray-700 text-center">Welcome back!</h2>
            <p class="text-xl text-gray-600 text-center">Sign in here</p>


            <div class="mt-4 relative">
                <img src="{{ asset('assets/svg/user-svgrepo-com.svg') }}" alt="username"
                    class="w-5 absolute top-[11px] left-[10px]">
                <input
                    class="bg-gray-50 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-600 rounded py-2 pl-10 pr-5 block w-full appearance-none"
                    type="email" placeholder="Email address" />
            </div>
            <div class="mt-4 relative">
                <img src="{{ asset('assets/svg/key-svgrepo-com.svg') }}" alt="username"
                    class="w-5 absolute top-[11px] left-[10px]">
                <input
                    class="bg-gray-50 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-600 rounded py-2 pl-10 pr-5 block w-full appearance-none"
                    type="password" placeholder="Password" />
            </div>
            <div class="mt-8">
                <button
                    class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Login</button>
            </div>
            <div class="mt-4 flex items-center justify-between">
                <span class="border-b w-1/5 md:w-1/4"></span>
                <a href="#" class="text-xs text-gray-500 uppercase">or sign up</a>
                <span class="border-b w-1/5 md:w-1/4"></span>
            </div>
        </div>

        <div class="hidden lg:block lg:w-1/2 bg-cover">
            <img src="{{ asset('assets/img/image-ui-login.png') }}" alt="">
        </div>
    </div>
</div>

@endsection