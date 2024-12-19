<?php

namespace App\Livewire;

use App\Models\Portfolio;
use Livewire\Component;

class SinglePortfolio extends Component
{

    public $portfolio;

    public $relatedPortfolios;


    public function mount($slug)
    {
        // Fetch the post using the slug
        $this->portfolio = Portfolio::where('slug', $slug)->firstOrFail();

        $this->relatedPortfolios = Portfolio::where('category_id', $this->portfolio->category_id)
        ->where('id', '!=', $this->portfolio->id)
        ->latest()
        ->take(3)
        ->get();
    }

    public function render()
    {
        return view('livewire.single-portfolio');
    }
}
