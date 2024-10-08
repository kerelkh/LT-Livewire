<?php

namespace App\Livewire\Posts;

use App\Models\Comment;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Form extends Component
{
    #[Validate('required')]
    public $author = '';

    #[Validate('required')]
    public $comment = '';

    public function render()
    {
        return view('livewire.posts.form');
    }

    public function post()
    {
        $this->validate();

        Comment::create([
            'author' => $this->author,
            'comment' => $this->comment,
        ]);

        session()->flash('success', 'Comment has been saved.');

        $this->reset();
        $this->dispatch('posts-created');
    }
}
