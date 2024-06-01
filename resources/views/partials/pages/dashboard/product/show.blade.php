<div class="bg-white my-10 rounded py-8 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col md:flex-row -mx-4">
        <div class="md:flex-1 px-4">
            <div class="h-[460px] rounded-lg bg-gray-300 mb-4">
                <img class="w-full h-full object-cover" src="{{ asset('storage/products/' . $product->image) }}"
                    alt="{{ $product->name }}">
            </div>
            {{-- <div class="flex -mx-2 mb-4">
                <div class="w-full px-2">
                    <form action="{{ route('cart.store', $product->id) }}">
                        <button
                            class="w-full bg-gray-900 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800 ">Add
                            to Cart</button>
                    </form>
                </div>
                <div class="w-1/2 px-2">
                    <button
                        class="w-full bg-gray-200 text-gray-800 py-2 px-4 rounded-full font-bold hover:bg-gray-300">Add
                        to Wishlist</button>
                </div>
            </div> --}}
        </div>
        <div class="md:flex-1 px-4">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $product->name }}</h2>
            {{-- <p class="text-gray-600 text-sm mb-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed
                ante justo. Integer euismod libero id mauris malesuada tincidunt.
            </p> --}}
            <div class="flex mb-4">
                <div class="mr-4">
                    <span class="font-bold text-gray-700">Harga:</span>
                    <span class="text-gray-600">Rp. {{ $product->price }}</span>
                </div>
                <div>
                    <span class="font-bold text-gray-700">Availability:</span>
                    <span class="text-gray-600">{{ $product->stock }} In Stock</span>
                </div>
            </div>
            <form action="{{ route('cart.store', $product->id) }}" method="post">
                @csrf
                <div class="w-full">

                    {{-- Amount --}}
                    <div id="amount" class="bg-white rounded-md shadow-lg z-10">
                        <div class="flex items-center justify-center p-2">
                            <input type="number" name="quantity"
                                class="w-full rounded-md px-2 py-1 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:border-transparent"
                                value="1" min="1" max="{{ $product->stock }}">
                        </div>
                    </div>

                    {{-- Description --}}
                    <div class="my-8">
                        <span class="font-bold text-gray-700">Product Description:</span>
                        <p class="text-gray-600 text-sm mt-2">
                            {{ $product->description }}
                        </p>
                    </div>

                    {{-- Add to Cart --}}
                    <button type="submit"
                        class="w-full bg-gray-900 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800 cursor-pointer"
                        @if(auth()->check() != true || auth()->user()->role_user != 'user')
                        disabled @endif>
                        Add to Cart
                    </button>
                </div>
            </form>
            {{-- <div class="mb-4">
                <span class="font-bold text-gray-700">Select Color:</span>
                <div class="flex items-center mt-2">
                    <button class="w-6 h-6 rounded-full bg-gray-800 mr-2"></button>
                    <button class="w-6 h-6 rounded-full bg-red-500 mr-2"></button>
                    <button class="w-6 h-6 rounded-full bg-blue-500 mr-2"></button>
                    <button class="w-6 h-6 rounded-full bg-yellow-500 mr-2"></button>
                </div>
            </div>
            <div class="mb-4">
                <span class="font-bold text-gray-700">Select Size:</span>
                <div class="flex items-center mt-2">
                    <button
                        class="bg-gray-300 text-gray-700 py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400">S</button>
                    <button
                        class="bg-gray-300 text-gray-700 py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400">M</button>
                    <button
                        class="bg-gray-300 text-gray-700 py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 ">L</button>
                    <button
                        class="bg-gray-300 text-gray-700 py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400">XL</button>
                    <button
                        class="bg-gray-300 text-gray-700 py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400">XXL</button>
                </div>
            </div> --}}

        </div>
    </div>
</div>