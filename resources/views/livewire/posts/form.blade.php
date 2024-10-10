<div>
      <div class="mt-5 p-4 relative z-10 bg-white border rounded-xl sm:mt-10 md:p-10 dark:bg-neutral-900 dark:border-neutral-700">
        <form wire:submit="post" wire:keydown.enter="post">
          <div class="mb-4 sm:mb-8">
            <label for="hs-feedback-post-comment-name-1" class="block mb-2 text-sm font-medium dark:text-white">Author</label>
            <input wire:model="author" type="text" id="hs-feedback-post-comment-name-1" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Author">
            @error('author')
                <div class="mt-2 bg-yellow-100 border border-yellow-200 text-sm text-yellow-800 rounded-lg p-4 dark:bg-yellow-800/10 dark:border-yellow-900 dark:text-yellow-500" role="alert" tabindex="-1" aria-labelledby="hs-soft-color-warning-label">
                    <span id="hs-soft-color-warning-label" class="font-bold">Warning</span> {{ $message }}
                </div>
            @enderror
          </div>

          <div>
            <label for="hs-feedback-post-comment-textarea-1" class="block mb-2 text-sm font-medium dark:text-white">Comment</label>
            <div class="mt-1">
              <textarea wire:model="comment" id="hs-feedback-post-comment-textarea-1" name="hs-feedback-post-comment-textarea-1" rows="3" class="border py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Leave your comment here..."></textarea>
            </div>
            @error('comment')
                <div class="mt-2 bg-yellow-100 border border-yellow-200 text-sm text-yellow-800 rounded-lg p-4 dark:bg-yellow-800/10 dark:border-yellow-900 dark:text-yellow-500" role="alert" tabindex="-1" aria-labelledby="hs-soft-color-warning-label">
                    <span id="hs-soft-color-warning-label" class="font-bold">Warning</span> {{ $message }}
                </div>
            @enderror
          </div>

          <div class="mt-6 grid">
            <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Submit</button>
          </div>
        </form>
      </div>
</div>
