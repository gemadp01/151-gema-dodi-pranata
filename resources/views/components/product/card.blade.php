@props([
'name',
'price',
'product_owner',
'product_image',
'profil_image'
])

<div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-72 w-full">
    <img src="{{ $product_image }}" alt="{{ $name }}" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-xl text-gray-800 mb-2 ">{{ $name }}</h2>
        <p class="text-2xl text-gray-700 font-bold leading-tight mb-4">
            Rp. {{ $price }}
        </p>
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{ $profil_image }}" alt="{{ $product_owner }}" class="w-8 h-8 rounded-full mr-2">
                <span class="text-sm text-gray-800 ">{{ $product_owner }}</span>
            </div>
            {{-- <span class="text-gray-600">2 hours ago</span> --}}
        </div>
    </div>
</div>