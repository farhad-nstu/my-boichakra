<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BookPublisher;

use DB;
use Session;

use Intervention\Image\ImageManagerStatic as Image;



class BookPublisherController extends Controller
{

    public function allBookPublisher(){
    	$allBook = BookPublisher::all();
    	return view('admin.category.book.publisher.all-publisher', compact('allBook'));
    }

    public function addBookPublisher() {
        return view('admin.category.book.publisher.add-publisher');
    }

    public function storeBookPublisher(Request $request){
    	$this->validate($request, array(
            
            'publisher_name'  => 'required',
            
            
            
        ));
        $addBook = new BookPublisher();
        $addBook->category_id = $request->category_id;
        $addBook->publisher_name = $request->publisher_name;
        $addBook->publisher_details = $request->publisher_details;
        $addBook->status = 1;
        $addBook->adding_date = $request->adding_date;
        
        /*if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('public/images/' . $filename);
            Image::make($image)->resize(80, 80)->save($location);
            $addBook->image = $filename;
        }*/
        //save our image
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


     public function viewBookPublisher($id){
        $single=DB::table('book_publishers')
                  ->where('id',$id)
                  ->first();
        return view('admin.category.book.publisher.view-publisher', compact('single'));
    }


    //Edit part
    public function editBookPublisher($id){

    	$editBook = BookPublisher::find($id);
    	return view('admin.category.book.publisher.edit-publisher', compact('editBook'));
    }

    //Update part
    public function updateBookPublisher(Request $request, $id){
    	$this->validate($request, array(
            
            'publisher_name'  => 'required',
            
            
            
        ));
        $updateBook = BookPublisher::find($id);

        $updateBook->category_id = $request->category_id;
        $updateBook->publisher_name = $request->publisher_name;
        $updateBook->publisher_details = $request->publisher_details;
        $updateBook->status = 1;
        $updateBook->adding_date = $request->adding_date;
        
        
        
        //save our image
         $image = $request->file('image');
        if ($image) {
            /*$image_name= str_random(5);*/
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image.'.'.$ext;
            $upload_path='public/images';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

            $updateBook->image = $success;
            
        }


        $updateBook->save(); 
       
       
 
        
        Session::flash('success', 'The book was successfully Updated!');
        return redirect()->route('all-book-publisher');
    }


    public function deleteBookPublisher($id){
    	 $delete = DB::table('book_publishers')
                ->where('id',$id)
                ->first();
        $photo = $delete->image;
        unlink($photo);
        $dltproduct = DB::table('book_publishers')
                ->where('id',$id)
                ->delete();

        return redirect()->back();        
    }
}
