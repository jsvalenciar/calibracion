<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class product extends Model
{
    use HasFactory;

    public function movements(): HasMany
    {
        return $this->hasMany(Movement::class); //relacion para halar productos 
    }
}
