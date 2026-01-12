<?php

namespace App\Livewire\Dashboard;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Transactions extends Component
{
    public function render(): View
    {
        return view('livewire.dashboard.transactions');
    }
}
