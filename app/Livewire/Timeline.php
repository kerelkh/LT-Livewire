<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Timeline extends Component
{

    public \App\Livewire\Forms\timeline $timeline;

    public function render()
    {
        return view('livewire.timeline');
    }

    public function post()
    {
        $result = $this->timeline->post();
        if($result) {
            session()->flash("success", "Posted!");
            $this->dispatch('refresh-timeline');

        }else{
            session()->flash('error','Unable to post');
        }

    }
}
