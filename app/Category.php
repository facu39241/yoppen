<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description',
        'condition',
    ];
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
