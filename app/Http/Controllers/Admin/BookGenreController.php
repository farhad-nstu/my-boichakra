<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BookGenre;
use DB;

class BookGenreController extends Controller
{
    /*public function allGenres(){
    	
    	$allGenres = BookGenre::orderBy('book_genre_name', 'asc')->paginate(5);
    	return view('admin.category.book.Genres.all-genres', compact('allGenres'));
    }*/


    public function allGenres(){
        $data = DB::table('book_genres')->orderBy('id', 'asc')->paginate(10);
        return view('admin.category.book.genres.all-genres', compact('data'));
        /*return view('admin.category.book.genres.all-genres');*/
    	
    }


    //search
	function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
                $query = $request->get('query');
                $query = str_replace(" ", "%", $query);
            $data = DB::table('book_genres')
                        ->where('id', 'like', '%'.$query.'%')
                        ->orWhere('book_genre_name', 'like', '%'.$query.'%')
                        ->orderBy($sort_by, $sort_type)
                        ->paginate(10);
            return view('admin.category.book.genres.pagination_data', compact('data'))->render();
        }
    }






    public function addGenres(){
    	return view('admin.category.book.Genres.add-genres');
    }

    //insert
    public function insertGenres(Request $request){
    	$this->validate($request, array(
            
            'book_genre_name'  => 'required',
        ));

        $addGenre = new BookGenre();

        $addGenre->category_id = $request->category_id;
        $addGenre->book_genre_name = $request->book_genre_name;
        $addGenre->status = 1;

        $addGenre->save(); 
       

       
        return redirect()->back()->withMessage('inserted successfully');
    }


    //Edit 
    public function editGenres($id){
    	$editGenres = BookGenre::find($id);
    	return view('admin.category.book.Genres.edit-genres', compact('editGenres'));
    }
    
    //Update
    public function updateGenres(Request $request, $id){
    	$this->validate($request, array(
            
            'book_genre_name'  => 'required',
            
            
            
        ));
        $updateGenre = BookGenre::find($id);

        $updateGenre->category_id = $request->category_id;
        $updateGenre->book_genre_name = $request->book_genre_name;
       


        $updateGenre->save(); 
       
        return redirect()->route('all-genres')->with('message', 'Genres is updated successfully');
    }


    //Status
    public function updateStatus(Request $request, $id){
    	$genreStatus = BookGenre::find($id);

    	$genreActive = $genreStatus->status == 1;
    	$gernreDeactive = $genreStatus->status ==0;

    	if($genreActive){
    		$genreStatus->status = 0;
    		$genreStatus->save();
    	} if($gernreDeactive){
    		$genreStatus->status = 1;
    		$genreStatus->save();   
    	}

    	return redirect()->back()->with('success', 'status updated successfully');
    }

    //Delete
    public function deleteGenres($id){
    	$dlt = BookGenre::find($id);
    	$dlt->delete();

    	return redirect()->back(); 
    }



    /*public function search(Request $request){  
    	$search = $request->get('search');
    	$genres = DB::table('book_genres')->where('book_genre_name', 'like', '%'.$search.'%')->latest()->paginate(5);
    	return view('admin.category.book.Genres.all-genres', ['genres' => $genres]);
    }*/

   


}
