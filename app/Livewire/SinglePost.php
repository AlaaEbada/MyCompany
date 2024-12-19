<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\PostLike;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SinglePost extends Component
{

    public $post;

    public $relatedPosts;

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


    public function mount($slug)
    {
        // Fetch the post using the slug
        $this->post = Post::where('slug', $slug)->firstOrFail();

        $this->relatedPosts = Post::where('category_id', $this->post->category_id)
        ->where('id', '!=', $this->post->id)
        ->latest()
        ->take(3)
        ->get();
    }

    public function render()
    {
        return view('livewire.single-post');
    }
}
