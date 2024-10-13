<div>
    @foreach($posts as $post)
        <div wire:key="{{ $post->id }}" class="mb-5">
            <p class="text-gray-500 text-sm">{{ ucfirst($post->user->name) }}</p>
            <div class="mt-1 border bordery-gray-50 p-4">
                {{ $post->post }}
            </div>
            <div class="flex justify-between items-center">
                <span class="text-blue-400 text-xs">{{ $post->created_at->diffForHumans() }}</span>
                @if(auth()->user()->id == $post->user->id)
                <button type="button" wire:click="$dispatch('delete-timeline', { timeline: {{ $post }} })" wire:confirm="Are you sure to delete ?" class="text-red-500 text-xs">Del</button>
                @endif
            </div>
        </div>
    @endforeach
</div>
