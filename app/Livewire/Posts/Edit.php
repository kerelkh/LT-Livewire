<?php

namespace App\Livewire\Posts;

use App\Models\Comment;
use Livewire\Component;
use Livewire\Attributes\Validate;


class Edit extends Component
{
    public $modComment;

    #[Validate('required')]
    public $author;

    #[Validate('required')]
    public $comment;

    public function render()
    {
        return view('livewire.posts.edit', [
            'comment' => $this->modComment
        ]);
    }

    public function mount(Comment $comment)
    {
        $this->modComment = $comment;
        $this->author = $this->modComment->author;
        $this->comment = $this->modComment->comment;
    }

    public function update()
    {
        try{
            $this->validate();
            $this->modComment->update([
                'author' => $this->author,
                'comment' => $this->comment
            ]);

            $this->modComment->save();

            session()->flash('success', 'Update success');
        }catch (\Exception $e) {
            session()->flash('error', 'Update failed');
        }
    }
}
