<?php

namespace App\Category\Models;

use App\Content\Services\Content;
use App\Post\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Category extends Model
{
    use HasFactory;

    public function posts(): MorphToMany
    {
        return $this->morphedByMany(Post::class, 'categorisable')
            ->withPivot('is_main');
    }
}
