<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Main extends Model
{
    // Mass assigned
    protected $fillable = ['id', 'news', 'data'];

    // Mutators


    // Polymorphic relation with categories


    public function scopeLastArticles($query, $count)
    {
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}