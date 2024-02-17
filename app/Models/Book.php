<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\Builder;

class Book extends Model
{
    use HasFactory;

    public function review() {
        return $this->hasMany(Review::class);
    }


    public function scopeTitle(Builder $query, string $title): Builder 
    {
        return $query->where('title', 'LIKE', '%'. $title .'%');
    }
}
