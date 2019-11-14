<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});



Auth::routes();




Route::get('/',[
    'uses' => 'Front\HomeController@index',
    'as' => '/'
]);

Route::group(['middleware' => 'auth'], function () {
    
    // 
    
});

Route::group(['middleware' => 'adminMiddleware'], function () {
    
     Route::get('/admin/home', 'HomeController@index')->name('home');
    
//    Category
    
    Route::get('/add-category',[
        'uses'  => 'Admin\CategoryController@addCategory',
        'as'    => 'add-category'
    ]);
    
//    Book    
    Route::get('/add-book',[
        'uses'  => 'Admin\BookController@addBook',
        'as'    => 'add-book'
    ]);
    Route::post('/insert-book',[
        'uses'  => 'Admin\BookController@insertBook',
        'as'    => 'insert-book'
    ]);

//    Book Publisher
    Route::get('/add-book-publisher',[
        'uses'  => 'Admin\BookPublisherController@addBookPublisher',
        'as'    => 'add-book-publisher'
    ]);

    Route::post('/store-book-publisher',[
        'uses'  => 'Admin\BookPublisherController@storeBookPublisher',
        'as'    => 'store-book-publisher'
    ]);

    Route::get('/all-book-publisher',[
        'uses'  => 'Admin\BookPublisherController@allBookPublisher',
        'as'    => 'all-book-publisher'
    ]);
    Route::get('/edit-book-publisher/{id}',[
        'uses'  => 'Admin\BookPublisherController@editBookPublisher',
        'as'    => 'edit-book-publisher'
    ]);
    Route::post('/update-book-publisher/{id}',[
        'uses'  => 'Admin\BookPublisherController@updateBookPublisher',
        'as'    => 'update-book-publisher'
    ]);
    Route::get('/delete-book-publisher/{id}',[
        'uses'  => 'Admin\BookPublisherController@deleteBookPublisher',
        'as'    => 'delete-book-publisher'
    ]);
    Route::get('/view-book-publisher/{id}',[
        'uses'  => 'Admin\BookPublisherController@viewBookPublisher',
        'as'    => 'view-book-publisher'
    ]);


    
//    Book Writer
    Route::get('/add-book-writer',[
        'uses'  => 'Admin\BookWriterController@addBookWriter',
        'as'    => 'add-book-writer'
    ]);

//    Book Category    
    Route::get('/add-book-category',[
        'uses'  => 'Admin\BookCategoryController@addBookCategory',
        'as'    => 'add-book-category'
    ]);

    
});

Route::group(['middleware' => 'myUserMiddleware'], function () {
    
    Route::get('/user/home', 'HomeController@userIndex')->name('user.home');
    
});



//Category

    Route::get('/add-category', [
        'uses'  => 'Admin\CategoryController@addCategory',
        'as'    => 'add-category'
    ]);



//Languages
Route::get('/all-languages', 'Admin\BookLanguageController@allLanguages')->name('all-languages');    
Route::get('/add-book-languages', [
   'uses'  => 'Admin\BookLanguageController@addLanguages',
    'as'    => 'add-book-languages'
]);
Route::post('/insert-book-languages', [
   'uses'  => 'Admin\BookLanguageController@insertLanguages',
    'as'    => 'insert-book-languages'
]);
Route::get('/edit-book-languages/{id}', 'Admin\BookLanguageController@editLanguages')->name('edit-book-languages');
Route::post('/update-book-languages/{id}', 'Admin\BookLanguageController@updateLanguages')->name('update-book-languages');
Route::get('/delete-book-languages/{id}', 'Admin\BookLanguageController@deleteLanguages')->name('delete-book-languages');
Route::get('/update-book-language-status/{id}', 'Admin\BookLanguageController@updateStatus')->name('update-book-language-status');
//search
Route::get('/language/pagination/language_fetch_data', 'Admin\BookLanguageController@language_fetch_data');



//Genres
Route::get('/all-genres', 'Admin\BookGenreController@allGenres')->name('all-genres');
Route::get('/add-book-genres', 'Admin\BookGenreController@addGenres')->name('add-book-genres');
Route::post('/insert-book-genres', 'Admin\BookGenreController@insertGenres')->name('insert-book-genres');
Route::get('/edit-book-genres/{id}', 'Admin\BookGenreController@editGenres')->name('edit-book-genres');
Route::post('/update-book-genres/{id}', 'Admin\BookGenreController@updateGenres')->name('update-book-genres');
Route::get('/delete-book-genres/{id}', 'Admin\BookGenreController@deleteGenres')->name('delete-book-genres');
Route::get('/update-book-genre-status/{id}', 'Admin\BookGenreController@updateStatus')->name('update-book-genre-status');
//search
Route::get('/pagination/fetch_data', 'Admin\BookGenreController@fetch_data');



//Tags
Route::get('/all-tags', 'Admin\BookTagController@allTags')->name('all-tags');
Route::get('/add-book-tags', 'Admin\BookTagController@addTags')->name('add-book-tags');
Route::post('/insert-book-tags', 'Admin\BookTagController@insertTags')->name('insert-book-tags');
Route::get('/edit-book-tags/{id}', 'Admin\BookTagController@editTags')->name('edit-book-tags');
Route::post('/update-book-tags/{id}', 'Admin\BookTagController@updateTags')->name('update-book-tags');
Route::get('/delete-book-tags/{id}', 'Admin\BookTagController@deleteTags')->name('delete-book-tags');
Route::get('/update-book-tag-status/{id}', 'Admin\BookTagController@updateStatus')->name('update-book-tag-status');
//search
Route::get('/tag/pagination/tag_fetch_data', 'Admin\BookTagController@tag_fetch_data');
