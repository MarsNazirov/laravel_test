<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Driver;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    public function category(): BelongsTo 
    {
        return $this->belongsTo(Category::class);
    }

    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }
}
