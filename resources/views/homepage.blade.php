@extends('partials.layouts.app')

@section('container')

@include('partials.pages.homepage.header')

<main class="flex-grow">
    @if ( Request::is('/') )

    <div>

        <div
            class="grid grid-cols-1 gap-y-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 justify-items-center my-8">

            @foreach ($products as $product)
            <x-product.card :href="route('detail.product', $product)" :name="$product->name" :price="$product->price"
                :stock="$product->stock" :image="asset('storage/products/' . $product->image)" />
            @endforeach

        </div>

    </div>

    @elseif ( Route::is('detail.product') )
    @include('partials.pages.dashboard.product.show')
    @endif
</main>

@include('partials.pages.homepage.footer')

@endsection