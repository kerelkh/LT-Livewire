<?php

namespace App\Livewire\Forms;

use Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class timeline extends Form
{

    #[Validate(['required'])]
    public $post = "";

    public function post(): bool
    {
        $this->validate();

        try{
            $response = \App\Models\Timeline::create([
                'user_id' => Auth::user()->id,
                'post' => $this->post,
            ]);

            $this->reset();

            return true;
        }catch (\Exception $e) {
            return false;
        }
    }

}
