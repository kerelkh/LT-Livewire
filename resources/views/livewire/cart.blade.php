<div class="px-2 md:px-5 lg:px-10 py-5">

    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-xl">Cart</p>

        @if($carts ?? false)
            <p class="py-3 border-b-8 border-black">List item</p>
            @forelse ($carts as $cart)
            <div class="flex gap-5 items-center py-5 px-3 border-b-2 text-gray-600 justify-between">
                <p>{{ $cart['name'] }}</p>
                <p>{{ $cart['price'] }}</p>
            </div>
            @empty
                <p>No Product</p>
            @endforelse
            <div class="flex gap-5 items-center py-5 px-3 border-b-2 text-black font-bold justify-between">
                <p>Total</p>
                <p>{{ array_sum([$carts[0]['price'],$carts[1]['price'] ])}}</p>
            </div>
        @endif

        <div class="my-5 flex justify-end items-center">
            <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                Payment
            </button>
        </div>
    </div>
</div>
