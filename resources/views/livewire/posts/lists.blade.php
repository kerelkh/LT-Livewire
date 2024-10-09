<div>
    <ul class="space-y-5">
    @foreach ($comments as  $co)
        <li class="flex ms-auto gap-x-2 sm:gap-x-4" wire:key="{{ $co->id }}">
            <div class="grow text-end space-y-3 group">
                <!-- Card -->
                <div class="text-sm text-gray-500 flex gap-2 items-center justify-end">{{ $co->author }} <a wire:navigate href="{{ route('posts.edit', ['comment' => $co]) }}"><img src="{{ asset('icons/edit.svg') }}"/></a> </div>
                <div class="inline-block bg-blue-600 rounded-2xl p-4 shadow-sm">
                <p class="text-sm text-white">
                    {{ $co->comment }}
                </p>
                </div>
                <!-- End Card -->
            </div>

            <span class="shrink-0 inline-flex items-center justify-center size-[38px] rounded-full bg-gray-600">
                <span class="text-sm font-medium text-white leading-none">{{ strtoupper($co->author[0]) }}</span>
            </span>
        </li>
    @endforeach
    </ul>
</div>
