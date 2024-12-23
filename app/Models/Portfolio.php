<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $with = ['category'];

    protected $fillable = [
        'title',
        'description',
        'slug',
        'category_id',
        'image',
    ];

    // Define relationship with PortfolioCategory
    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }
}
