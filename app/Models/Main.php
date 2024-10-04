<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Main extends Model
{
    use HasFactory;

    public function one(): HasOne
    {
        return $this->hasOne(One::class);
    }

    public function manies(): HasMany
    {
        return $this->hasMany(Many::class);
    }
}
