<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Contracts\Database\Query\Builder as QueryBuilder;

class Book extends Model
{
    use HasFactory;

    public function review() {
        return $this->hasMany(Review::class);
    }


    public function scopeTitle(Builder $query, string $title): Builder | QueryBuilder
    {
        return $query->where('title', 'LIKE', '%'. $title .'%');
    }

    public function scopePopular(Builder $query): Builder | QueryBuilder {

    return $query->withCount('review')->orderBy('review_count', 'desc');            

    }

    public function scopeHighestRated(Builder $query): Builder | QueryBuilder {
     return $query->withAvg('review', 'rating')->orderBy('review_avg_rating', 'desc');               
    }
}
