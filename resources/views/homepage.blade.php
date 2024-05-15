@extends('partials.layouts.app')

@section('content')
<div class="container mx-auto border border-red-500">

    <div class="grid grid-cols-4 justify-items-center">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-72 w-full">
            <img src="https://source.unsplash.com/600x400?product" alt="product-name" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl text-gray-800 mb-2 ">Product name</h2>
                <p class="text-2xl text-gray-700 font-bold leading-tight mb-4">
                    Rp. 50.000
                </p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <img src="{{ asset('assets/img/man.png') }}" alt="Avatar" class="w-8 h-8 rounded-full mr-2">
                        <span class="text-sm text-gray-800 ">John Doe</span>
                    </div>
                    {{-- <span class="text-gray-600">2 hours ago</span> --}}
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-72 w-full">
            <img src="https://source.unsplash.com/600x400?product" alt="product-name" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl text-gray-800 mb-2 ">Product name</h2>
                <p class="text-2xl text-gray-700 font-bold leading-tight mb-4">
                    Rp. 50.000
                </p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <img src="{{ asset('assets/img/man.png') }}" alt="Avatar" class="w-8 h-8 rounded-full mr-2">
                        <span class="text-sm text-gray-800 ">John Doe</span>
                    </div>
                    {{-- <span class="text-gray-600">2 hours ago</span> --}}
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-72 w-full">
            <img src="https://source.unsplash.com/600x400?product" alt="product-name" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl text-gray-800 mb-2 ">Product name</h2>
                <p class="text-2xl text-gray-700 font-bold leading-tight mb-4">
                    Rp. 50.000
                </p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <img src="{{ asset('assets/img/man.png') }}" alt="Avatar" class="w-8 h-8 rounded-full mr-2">
                        <span class="text-sm text-gray-800 ">John Doe</span>
                    </div>
                    {{-- <span class="text-gray-600">2 hours ago</span> --}}
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-72 w-full">
            <img src="https://source.unsplash.com/600x400?product" alt="product-name" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl text-gray-800 mb-2 ">Product name</h2>
                <p class="text-2xl text-gray-700 font-bold leading-tight mb-4">
                    Rp. 50.000
                </p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <img src="{{ asset('assets/img/man.png') }}" alt="Avatar" class="w-8 h-8 rounded-full mr-2">
                        <span class="text-sm text-gray-800 ">John Doe</span>
                    </div>
                    {{-- <span class="text-gray-600">2 hours ago</span> --}}
                </div>
            </div>
        </div>
    </div>

</div>
@endsection