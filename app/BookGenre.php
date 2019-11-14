<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookGenre extends Model
{
    protected $fillable = [
        'category_id', 'book_genre_name', 'status',
    ];
}
