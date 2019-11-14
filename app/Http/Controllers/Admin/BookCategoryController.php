<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookCategoryController extends Controller
{
    public function addBookCategory() {
        return view('admin.category.book.category.add-category');
    }
}
