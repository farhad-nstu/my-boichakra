<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookLanguage extends Model
{
    protected $fillable = [
        'category_id', 'book_language_name', 'status',
    ];
}
