<?php

namespace App\Livewire;

use App\Models\Portfolio;
use Livewire\Attributes\Title;
use Livewire\Component;

class HomePage extends Component
{

    #[Title('Home')]
    public function render()
    {
        return view('livewire.home-page', [
            'portfolios' => Portfolio::latest()->take(3)->get()
        ]);
    }
}
