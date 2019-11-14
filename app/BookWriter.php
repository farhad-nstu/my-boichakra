<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookWriter extends Model
{
    protected $fillable = [
        'category_id', 'writer_name','writer_details', 'writer_image','status',
    ];
}
