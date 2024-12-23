<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostLike;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class BlogPage extends Component
{
    use WithPagination;

    #[Url()]
    public $search;
    public $selectedCategory = null; // Property to hold the selected category

    // Get posts based on search and category
    #[Computed()]
    public function posts()
    {
        $query = Post::query();
    
        // Apply category filter
        if ($this->selectedCategory) {
            $query->where('category_id', $this->selectedCategory);
        }
    
        // Apply search filter
        if ($this->search) {
            $query->where('title', 'like', '%' . $this->search . '%');
        }
    
        // Eager load likes
        $posts = $query->with('likes')->paginate(3);
    
        // Fetch liked post IDs for the authenticated user in bulk
        $likedPostIds = PostLike::where('user_id', Auth::id())
            ->pluck('post_id')
            ->toArray();
    
        // Add a flag to each post to indicate if the user liked it
        foreach ($posts as $post) {
            $post->user_liked = in_array($post->id, $likedPostIds);
        }
    
        return $posts;
    }
    

    #[Computed()]
    public function categories()
    {
        return Category::all();
    }

    // Handle liking a post
    public function likePost($postId)
    {
        $userId = Auth::id();

        if ($userId) {
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
        } else {
            redirect('/login');
        }
    }


    // Reset pagination when search term changes
    public function updatingSearch()
    {
        $this->resetPage();
    }

    // Filter posts by category
    public function filterByCategory($categoryId)
    {
        $this->selectedCategory = $categoryId;
        $this->resetPage();
    }

    public function removeCategoryFilter()
    {
        $this->selectedCategory = null;
        $this->resetPage();
    }


    #[Title('Blog')]
    public function render()
    {
        return view('livewire.blog-page');
    }
}
