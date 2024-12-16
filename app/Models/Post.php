<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'body', 'image', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {
        static::creating(function ($post) {
            // Automatically set user_id before creating the post
            if (!$post->user_id) {
                $post->user_id = Auth::id();
            }
        });

        // If you also want to handle updates, you can use the 'updating' event:
        static::updating(function ($post) {
            if (!$post->user_id) {
                $post->user_id = Auth::id();
            }
        });
    }
}
