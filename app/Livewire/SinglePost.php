<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class SinglePost extends Component
{

    public $post;

    public function mount($slug)
    {
        // Fetch the post using the slug
        $this->post = Post::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.single-post');
    }
}
