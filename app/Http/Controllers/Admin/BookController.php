<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function addBook() {
        return view('admin.category.book.add-book');
    }

    // insert book
    public function insertBook(Request $request){
    	$this->validate($request, array(
            
            'publisher_name'  => 'required',
            
            
            
        ));
        $addBook = new BookPublisher();
        $addBook->category_id = $request->category_id;
        $addBook->publisher_name = $request->publisher_name;
        $addBook->publisher_details = $request->publisher_details;
        $addBook->status = 1;
        $addBook->adding_date = $request->adding_date;

        $image = $request->file('image');
        if ($image) {
           
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image.'.'.$ext;
            $upload_path='public/images';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

            $addBook->image = $success;
            
        }


        $addBook->save(); 
       
       
 
        
        Session::flash('success', 'The book was successfully save!');
        return redirect()->back();
    }
}
