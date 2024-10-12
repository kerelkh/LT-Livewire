<?php

namespace App\Livewire\Timeline;

use App\Models\Timeline;
use Livewire\Attributes\On;
use Livewire\Component;

class Show extends Component
{
    #[On('refresh-timeline')]
    public function refresh()
    {
        //
    }

    public function render()
    {
        $posts = Timeline::orderBy('created_at', 'desc')->get();
        sleep(1);
        return view('livewire.timeline.show', ['posts' => $posts ]);
    }

}
