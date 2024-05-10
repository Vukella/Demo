<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Blog extends Model
{
    use HasFactory;

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
    public function categories():BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
    public function tags():BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
