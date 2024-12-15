<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class ContactPage extends Component
{
    #[Title('Contact')]
    public function render()
    {
        return view('livewire.contact-page');
    }
}
