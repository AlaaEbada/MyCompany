<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactPage extends Component
{
    #[Validate('min:2|max:100|required')]
    public $name;

    #[Validate('email|required')]
    public $email;

    #[Validate('min:10|required')]
    public $message;

    public function contact()
    {
        $validated = $this->validate();

        Message::create($validated);

        $this->reset('name', 'email', 'message');

        $this->dispatch(
            'alert',
            type:'success',
            title: 'Message Sent !',
            position:'center',
            timer:'1500'
    );
    }

    #[Title('Contact')]
    public function render()
    {
        return view('livewire.contact-page');
    }
}
