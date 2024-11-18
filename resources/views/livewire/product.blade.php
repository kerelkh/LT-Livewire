<div class="px-2 md:px-5 lg:px-10 py-5">

    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-xl">See what we offer</p>

        <x-alert></x-alert>
        <div class="my-5 flex gap-5">
            @forelse($products as $pd)
            <div class="max-w-sm flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <img class="w-full h-auto rounded-t-xl" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&q=80" alt="Card Image">
                <div class="p-4 md:p-5">
                  <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                    {{ $pd->name }}
                  </h3>
                  <p class="mt-1 text-gray-500 dark:text-neutral-400">
                    Usefull thing to sit on, whenever you tired you can sit on it and get comfortable.
                  </p>
                  <div class="my-3 flex justify-between items-center gap-2">
                        <div class="flex justify-between items-center gap-2 text-sm">
                            <span class="p-1 bg-red-600 rounded text-white">- 50%</span>
                            <p class="text-gray-600 line-through">Rp {{ $pd->price * 2 }} </p>
                        </div>
                        <p>Rp {{ $pd->price }}</p>
                    </div>
                    <div class="flex justify-end items-center">

                        <a href="{{ route('product.detail', ['id' => $pd->id ]) }}" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Detail
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <path d="m5 11 4-7"></path>
                              <path d="m19 11-4-7"></path>
                              <path d="M2 11h20"></path>
                              <path d="m3.5 11 1.6 7.4a2 2 0 0 0 2 1.6h9.8c.9 0 1.8-.7 2-1.6l1.7-7.4"></path>
                              <path d="m9 11 1 9"></path>
                              <path d="M4.5 15.5h15"></path>
                              <path d="m15 11-1 9"></path>
                            </svg>
                          </a>
                    </div>
                </div>
              </div>
            @empty
            <p>No Product Available</p>
            @endforelse
        </div>
    </div>
</div>
