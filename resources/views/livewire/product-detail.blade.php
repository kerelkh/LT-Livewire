<div class="px-2 md:px-5 lg:px-10 py-5">

    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-medium">{{ $product->name }}</h1>
        <hr>
        <div class="my-5">
            <p>{{ $product->price }}</p>
        </div>
        <form wire:submit="add">
            <input wire:model="quantity" type="number" name="quantity" id="quantity" value="0" max="{{ $product->stock }}">
            @error('quantity')
            <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror
            <span class="text-gray-500 text-xs">stock {{ $product->stock }}</span>

            <!-- End Input Number -->
            <div class="mt-5">
                <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-teal-500 text-white hover:bg-teal-600 focus:outline-none focus:bg-teal-600 disabled:opacity-50 disabled:pointer-events-none">
                    Add to Cart
                </button>
            </div>
        </form>
    </div>
</div>
