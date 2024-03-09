<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends BaseModel
{
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
