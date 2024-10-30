<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class DashboardProduct extends Component
{
    public function render()
    {
        return view('livewire.dashboard-product');
    }
}
