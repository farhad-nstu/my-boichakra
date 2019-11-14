<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BookTag;
use DB;

class BookTagController extends Controller
{
    public function allTags(){
        $tag = DB::table('book_tags')->orderBy('id', 'asc')->paginate(10);
        return view('admin.category.book.tags.all-tags', compact('tag'));
    	/*$allTags = BookTag::orderBy('book_tag_name', 'asc')->paginate(5);
    	return view('admin.category.book.tags.all-tags', compact('allTags'));*/
    }

    //search
    function tag_fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
                $query = $request->get('query');
                $query = str_replace(" ", "%", $query);
            $tag = DB::table('book_tags')
                        ->where('id', 'like', '%'.$query.'%')
                        ->orWhere('book_tag_name', 'like', '%'.$query.'%')
                        ->orderBy($sort_by, $sort_type)
                        ->paginate(10);
            return view('admin.category.book.tags.pagination_data', compact('tag'))->render();
        }
    }

    public function addTags(){
    	return view('admin.category.book.tags.add-tags');
    }

    //insert
    public function insertTags(Request $request){
    	$this->validate($request, array(
            
            'book_tag_name'  => 'required',
        ));

        $addTag = new BookTag();

        $addTag->category_id = $request->category_id;
        $addTag->book_tag_name = $request->book_tag_name;
        $addTag->status = 1;

        $addTag->save(); 
       

       
        return redirect()->back()->withMessage('inserted successfully');
    }


    //Edit 
    public function editTags($id){
    	$editTags = BookTag::find($id);
    	return view('admin.category.book.tags.edit-tags', compact('editTags'));
    }
    
    //Update
    public function updateTags(Request $request, $id){
    	$this->validate($request, array(
            
            'book_tag_name'  => 'required',
            
            
            
        ));
        $updateTag = BookTag::find($id);

        $updateTag->category_id = $request->category_id;
        $updateTag->book_tag_name = $request->book_tag_name;
        $updateTag->status = 1;


        $updateTag->save(); 
       
        return redirect()->route('all-tags')->with('message', 'Tag is updated successfully');
    }


    //Status
    public function updateStatus(Request $request, $id){
    	$tagStatus = BookTag::find($id);

    	$tagActive = $tagStatus->status == 1;
    	$tagDeactive = $tagStatus->status ==0;

    	if($tagActive){
    		$tagStatus->status = 0;
    		$tagStatus->save();
    	} if($tagDeactive){
    		$tagStatus->status = 1;
    		$tagStatus->save();   
    	}

    	return redirect()->back()->with('success', 'status updated successfully');
    }

    //Delete
    public function deleteTags($id){
    	$dlt = BookTag::find($id);
    	$dlt->delete();

    	return redirect()->back(); 
    }
}
