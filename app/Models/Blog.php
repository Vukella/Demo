<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'slug', 'title', 'thumbnail', 'body', 'summary', 'published_at'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function categories():BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'blog_category');
    }
    public function tags():BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'blog_tag');
    }
}
