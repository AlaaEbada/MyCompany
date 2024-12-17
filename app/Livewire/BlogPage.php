<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\PostLike;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class BlogPage extends Component
{
    use WithPagination;

    public $search;

    #[Computed()]
    public function posts()
    {
        return Post::where('title', 'like', '%' . $this->search . '%')->paginate(3);

    }

    public function likePost($postId)
    {

        $userId = Auth::id();

        if($userId){
            // Check if the user has already liked the post
            $existingLike = PostLike::where('user_id', $userId)
            ->where('post_id', $postId)
            ->first();

            if ($existingLike) {
            // If already liked, "unlike" the post
            $existingLike->delete();
            } else {
            // If not liked, create a new like
            PostLike::create([
                'user_id' => $userId,
                'post_id' => $postId,
            ]);
            }

        }else {
            redirect('/login');
        }


    }

        public function userHasLiked($postId)
    {
        return PostLike::where('user_id', Auth::id())->where('post_id', $postId)->exists();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }


    #[Title('Blog')]
    public function render()
    {
        return view('livewire.blog-page');
    }
}
