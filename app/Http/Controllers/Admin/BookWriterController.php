<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookWriterController extends Controller
{
    public function addBookWriter() {
        return view('admin.category.book.writer.add-writer');
    }
}
