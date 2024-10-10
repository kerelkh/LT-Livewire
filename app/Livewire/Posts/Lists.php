<?php

namespace App\Livewire\Posts;

use App\Models\Comment;
use Livewire\Attributes\On;
use Livewire\Component;

class Lists extends Component
{
    #[On('posts-created')]
    public function render()
    {
        $comments = Comment::orderBy('created_at', 'desc')->get();
        return view('livewire.posts.lists', compact(['comments']));
    }

    #[On('delete-comment')]
    public function delete(Comment $comment)
    {
        try{
            $comment->delete();
        }catch (\Exception $e){
            session()->flash('error', 'Failed delete comment.');
        }
    }
}
