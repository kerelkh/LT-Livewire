<?php

namespace App\Livewire\Posts;

use App\Models\Timeline;
use Livewire\Attributes\On;
use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        return view('livewire.posts.show');
    }

}
