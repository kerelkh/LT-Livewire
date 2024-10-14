<div class="min-w-xl mx-auto min-h-screen">
    <div>
        <!-- Comment Form -->
        <div class="px-4 sm:px-6 lg:px-8 mx-auto">
            <div class="mx-auto max-w-2xl">
            <x-alert></x-alert>

            <!-- Card -->
            <div class="p-4 relative z-10 bg-gray-50 border rounded-xl sm:mt-10 md:p-10 dark:bg-neutral-900 dark:border-neutral-700">
                <form wire:submit="post" wire:keydown.enter="post">
                <div>
                    <label for="hs-feedback-post-comment-textarea-1" class="block mb-2 text-sm font-medium dark:text-white">Share your thought</label>
                    <div class="mt-1">
                    <textarea id="hs-feedback-post-comment-textarea-1" wire:model="timeline.post" rows="3" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="What's on your mind..."></textarea>
                    </div>
                    @error('timeline.post')
                        <span class='text-red-600 text-sm'>{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-6 grid">
                    <button type="submit" class="w-fit py-3 px-10 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 focus:outline-none focus:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-400 dark:bg-blue-800/30 dark:hover:bg-blue-800/20 dark:focus:bg-blue-800/20">
                        Post
                    </button>
                </div>
                </form>
            </div>
            <!-- End Card -->
            <div class="mt-5">
                <livewire:timeline.show :lazy="true"></livewire:timeline.show>
            </div>
            </div>
        </div>
        <!-- End Comment Form -->

    </div>
</div>
