<?php

namespace App\Livewire\Timeline;

use App\Models\Timeline;
use Auth;
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

    #[on('delete-timeline')]
    public function delete(Timeline $timeline)
    {
        try{
            if($timeline->user->id == Auth::user()->id){
                $timeline->delete();
                $this->emit('refresh-timeline');
            }else{
                session()->flash('error', 'Not Authorize');
            }
        }catch (\Exception $e){
            session()->flash('error', 'Unable to delete timeline');
        }
    }

}
