<?php

namespace App\Livewire;

use App\Models\Timeline;
use Auth;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Reply extends Component
{
    public Timeline $timeline;

    #[Validate(['required'])]
    public $body = "";

    protected $listeners = [
        'refresh-reply' => '$refresh',
    ];


    public function render()
    {
        return view('livewire.reply');
    }

    public function store()
    {
        $this->validate();

        try{
            $this->timeline->replys()->create([
                'body' => $this->body,
                'user_id' => Auth::user()->id,
            ]);

            $this->body = "";
            $this->dispatch('refresh-reply');
        }catch (\Exception $e)
        {
            session()->flash('error', 'Gagal response timeline');
        }
    }

    #[On('delete-reply')]
    public function delete(\App\Models\Reply $reply)
    {
        try{
            if(Auth::user()->id == $reply->user_id){
                $reply->delete();
                $this->emit('refresh-timeline');
            }else{
                session()->flash('error', 'Your not authorize');
            }
        }catch (\Exception $e){
            session()->flash('error', 'Delete comment failed');
        }
    }
}
