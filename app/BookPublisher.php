<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookPublisher extends Model
{
    protected $fillable = [
        'category_id', 'publisher_name','publisher_image','publisher_details', 'status', 'adding_date',
    ];
}
