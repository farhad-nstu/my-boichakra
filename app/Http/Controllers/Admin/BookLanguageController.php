<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BookLanguage;
use DB;

class BookLanguageController extends Controller
{
    public function allLanguages(){
        $lng = DB::table('book_languages')->orderBy('id', 'asc')->paginate(10);
        return view('admin.category.book.languages.languages', compact('lng'));
    	/*$allLanguage = BookLanguage::orderBy('book_language_name', 'asc')->paginate(5);
    	return view('admin.category.book.languages.languages', compact('allLanguage'));*/
    }

    //search
    function language_fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
                $query = $request->get('query');
                $query = str_replace(" ", "%", $query);
            $lng = DB::table('book_languages')
                        ->where('id', 'like', '%'.$query.'%')
                        ->orWhere('book_language_name', 'like', '%'.$query.'%')
                        ->orderBy($sort_by, $sort_type)
                        ->paginate(10);
            return view('admin.category.book.languages.pagination_data', compact('lng'))->render();
        }
    }






    

    public function addLanguages(){
    	return view('admin.category.book.languages.add-languages');
    }

    public function insertLanguages(Request $request){
    	$this->validate($request, array(
            
            'book_language_name'  => 'required',
        ));

        $addLanguage = new BookLanguage();

        $addLanguage->category_id = $request->category_id;
        $addLanguage->book_language_name = $request->book_language_name;
        $addLanguage->status = 1;

        $addLanguage->save(); 
       

       
        return redirect()->back()->withMessage('inserted successfully');
    }

    //Edit 
    public function editLanguages($id){
    	$editLanguages = BookLanguage::find($id);
    	return view('admin.category.book.languages.edit-language', compact('editLanguages'));
    }

    //Update
    public function updateLanguages(Request $request, $id){
    	$this->validate($request, array(
            
            'book_language_name'  => 'required',
            
            
            
        ));
        $updateLanguage = BookLanguage::find($id);

        $updateLanguage->category_id = $request->category_id;
        $updateLanguage->book_language_name = $request->book_language_name;
        $updateLanguage->status = 1;


        $updateLanguage->save(); 
       
        return redirect()->route('all-languages')->with('message', 'language is updated successfully');
    }


    //Status
    public function updateStatus(Request $request, $id){
        $languageStatus = BookLanguage::find($id);

        $languageActive = $languageStatus->status == 1;
        $languageDeactive = $languageStatus->status ==0;

        if($languageActive){
            $languageStatus->status = 0;
            $languageStatus->save();
        } if($languageDeactive){
            $languageStatus->status = 1;
            $languageStatus->save();   
        }

        return redirect()->back()->with('success', 'status updated successfully');
    }


    //Delete
    public function deleteLanguages($id){
    	$dlt = BookLanguage::find($id);
    	$dlt->delete();

    	return redirect()->back(); 
    }
}
