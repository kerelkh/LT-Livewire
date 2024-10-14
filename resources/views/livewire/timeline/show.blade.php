<div>
    @foreach($posts as $post)
        <div wire:key="{{ $post->id }}" class="mb-5">
            <p class="text-gray-500 text-sm">{{ ucfirst($post->user->name) }}</p>
            <div class="mt-1 border bordery-gray-50 p-4">
                {{ $post->post }}
            </div>
            <div class="flex justify-between items-center">
                <div>
                    <span class="text-blue-400 text-xs">{{ $post->created_at->diffForHumans() }}</span>

                </div>
                @if(auth()->user()->id == $post->user->id)
                <button type="button" wire:click="$dispatch('delete-timeline', { timeline: {{ $post }} })" wire:confirm="Are you sure to delete ?" class="text-red-500 text-xs">Del</button>
                @endif
            </div>
            <div class="mt-1 flex gap-2 items-start">
                <img width="16" height="16" src="https://img.icons8.com/material-two-tone/24/down-right.png" alt="down-right"/>
                <div class="p-2 w-full bg-gray-50 border rounded-sm">
                    <livewire:reply wire:key="{{ $post->id }}" :timeline="$post"></livewire:reply>
                </div>
            </div>
        </div>
    @endforeach
</div>
