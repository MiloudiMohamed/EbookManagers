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
use App\Role;
use App\User;
use App\Permission;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/books','BookController@index')->name('books');
Route::get('/organisations','AdministratorController@index')->name('organisations');
Route::post('/organisations','AdministratorController@store')->name('organisations');

Route::get('/update_book/{id}','BookController@update_book')->name('updateBook');
Route::post('/update_book/{id}','BookController@process_update_book')->name('updateBook');
Route::get('/add_book','AdministratorController@add_book')->name('addBook');
Route::post('/add_book','AdministratorController@process_add_book')->name('addBook');

Route::get('/epubType','AdministratorController@epubType')->name('epubType');
Route::post('/epubType','AdministratorController@store_epubType')->name('epubType');
Route::get('/remove_epubType/{epubtypeId}','AdministratorController@destroy_epubType')->name('removeEpubType');
Route::get('/epubType/{epubtypeId}','AdministratorController@update_epubType')->name('epubTypeUpdate');

Route::post('/epubType/{epubtypeId}','AdministratorController@update_store_epubType')->name('epubTypeUpdate');

Route::get('/fileType','AdministratorController@fileType')->name('fileType');
Route::post('/fileType','AdministratorController@store_fileType')->name('fileType');


Route::get('/fileType/{filetypeId}','AdministratorController@update_fileType')->name('fileTypeUpdate');
Route::post('/fileType/{filetypeId}','AdministratorController@update_store_fileType')->name('fileTypeUpdate');
Route::get('/remove_fileType/{filetypeId}','AdministratorController@destroy_fileType')->name('removefileType');


Route::get('/publisher','AdministratorController@publisher')->name('publisher');
Route::get('/publisher/{publisherdId}','AdministratorController@update_publisher')->name('publisherUpdate');
Route::post('/publisher/{publisherdId}','AdministratorController@update_store_publisher')->name('publisherUpdate');
Route::get('/remove_publisher/{publisherId}','AdministratorController@destroy_publisher')->name('removePublisher');
Route::post('/publisher','AdministratorController@store_publisher')->name('publisher');



Route::get('/role',function()
{

    $admin = new Role();
    $admin->name         = 'Administrator';
    $admin->display_name = 'Administrator'; // optional
    $admin->description  = 'Admistrator is the super user'; // optional
    $admin->save();

    $enduser = new Role();
    $enduser->name         = 'Enduser';
    $enduser->display_name = 'Enduser'; // optional
    $enduser->description  = 'User is allowed to create,edit and delete'; // optional
    $enduser->save();

    $user = User::where('username', '=', 'miracle')->first();
    $user->attachRole($enduser); // parameter can be an Role object, array, or id
    $user->roles()->attach($enduser->id); // id only


    $createBook = new Permission();
    $createBook->name         = 'create-book';
    $createBook->display_name = 'Create book'; // optional
    $createBook->description  = 'create new book'; // optional
    $createBook->save();

    $editBook = new Permission();
    $editBook->name         = 'edit-book';
    $editBook->display_name = 'Edit Book'; // optional
    $editBook->description  = 'Edit existing book'; // optional
    $editBook->save();



    $deleteBook = new Permission();
    $deleteBook->name =  'delete-book';
    $deleteBook->display_name = 'Delete Book';
    $deleteBook->desription = 'Delete Account';
    $deleteBook->save();


    $createAccount = new Permission();
    $createBook->name ='create-account';
    $createBook->display_name ='Create Account';
    $createBook->description ='Create User Account';
    $createBook->save();


    $updateAccount = new Permission();
    $updateAccount->name ='update-account';
    $updateAccount->display_name ='Update Account';
    $updateAccount->description ='Update User Account';
    $updateAccount->save();

    $deleteAccount = new Permission();
    $deleteBook->name ='delete-account';
    $deleteBook->display_name = 'Delete Account';
    $deleteBook->description = 'Delete User Account';
    $deleteBook->save();



    $admin->attachPermissions(array($createBook,$editBook,$deleteBook,$createAccount,$updateAccount,$deleteAccount));
// equivalent to $admin->perms()->sync(array($createPost->id));

    $enduser->attachPermissions(array($createBook, $editBook,$deleteBook));
// equivalent to $owner->perms()->sync(array($createPost->id, $editUser->id));

});