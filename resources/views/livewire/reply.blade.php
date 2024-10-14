<div>
    <form wire:submit="store" wire:keydown.enter="store" class="mb-5">
        <div>
            <label for="hs-feedback-post-comment-textarea-1" class="block mb-2 text-xs text-gray-500 font-medium dark:text-white">Response</label>
            <div class="mt-1">
            <textarea id="hs-feedback-post-comment-textarea-1" wire:model="body" rows="3" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Write your response..."></textarea>
            </div>
            @error('body')
                <span class='text-red-600/80 text-xs'>{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-1 grid">
            <button type="submit" class="w-fit py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 focus:outline-none focus:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-400 dark:bg-blue-800/30 dark:hover:bg-blue-800/20 dark:focus:bg-blue-800/20">
                Reply
            </button>
        </div>
    </form>

    @foreach ($timeline->replys as $rep)
        <div wire:key="{{ $rep->id }}" class="mb-2">
            <div class="text-xs text-gray-500 flex gap-2 items-center">
                {{ ucfirst($rep->user->name) }}
            </div>
            <div class="inline-block py-2">
                <p class="text-sm">
                    {{ $rep->body }}
                </p>
            </div>
            @if(auth()->user()->id == $rep->user_id)
                <button type="button" wire:click="$dispatch('delete-reply', { reply : {{ $rep }}})" wire:confirm="Are you sure?" class="text-red-500 text-xs">Del</button>
            @endif
        </div>
    @endforeach
</div>
