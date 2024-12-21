<?php

namespace App\Livewire;

use App\Models\Portfolio;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class PortfolioPage extends Component
{
    use WithPagination;

    #[Title('Portfolio')]
    public function render()
    {
        return view('livewire.portfolio-page',[
            'portfolios' => Portfolio::latest()->paginate(6),
        ]);
    }
}
