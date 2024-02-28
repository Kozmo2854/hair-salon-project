<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryService
{
    public static function getCategories(): Collection
    {
        return Category::all();
    }
}
