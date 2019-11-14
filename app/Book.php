<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'category_id', 'writer_id', 'publisher_id', 'book_genre_id', 'book_language_id', 'book_tag_id', 'user_id', 'book_name', 'book_details', 'book_images', 'book_video', 'hit_count', 'circle_count', 'verified', 'assigned', 'status',
    ];
}
