<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class BlogPage extends Component
{

    #[Title('Blog')]
    public function render()
    {
        return view('livewire.blog-page');
    }
}
