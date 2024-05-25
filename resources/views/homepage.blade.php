@extends('partials.layouts.app')

@section('container')

@include('partials.pages.homepage.header')

<main class="flex-grow">
    <div class="container mx-auto border border-red-500">

        <div class="grid gap-3 grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 justify-items-center my-8">

            @for ($i = 1; $i
            <= 20; $i++) <x-product.card name="Product Name" price="100.000" product_owner="Product Owner"
                product_image="https://source.unsplash.com/600x400?product"
                :profil_image="asset('assets/img/man.png')" />
            @endfor

        </div>

    </div>
</main>

@include('partials.pages.homepage.footer')

@endsection