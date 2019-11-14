<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookTag extends Model
{
    protected $fillable = [
        'category_id', 'book_tag_name', 'status',
    ];
}
