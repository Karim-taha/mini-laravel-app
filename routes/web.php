<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
// use App\Http\Controllers\StudentsController;
// use App\Http\Controllers\WorkerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/info/{key}', function ($key){
//     $name = ['name'=>'ali', 'age'=>25];
//     return $name[$key];
// });

// Route::get('/info/{key}', function ($key){
//     $info = ['name'=>'ali', 'age'=>25];
//     if(array_key_exists($key, $info)){
//         return $info[$key];
//     }else{
//         return "Not Found";
//     }
// });

// Route::get('/req', function (){
//     // الفنكشن ريكويست بتتشيك على البارامز المبعوتة في اليو ار ال
//     $req = request();
//     return $req;
// });

// Route::get('/req1', function (){
//     // الفنكشن ريكويست بتتشيك على البارامز المبعوتة في اليو ار ال
//     $req = request("name");
//     if($req){
//         return $req;
//     }else{
//         return "Name not found";
//     }
// });

// Route::get('/student', function (){
//     return view('test.student');
// });

// Route::get('/home', function (){
//     return view('iti.home');
// });
// Route::get('/about', function (){
//     return view('iti.aboutus');
// });
// Route::get('/contact', function (){
//     return view('iti.contactus');
// });

// Route::get('/tracks', function(){
//     $tracks = ['PHP', '.NET', 'MERN'];
//     return view('iti.tracks', ["data"=>$tracks]);
// });

// Route::get('/books', function(){
//     $books = [
//         "b1" => ["title"=>"book1", "author"=>"karim"],
//         "b2" => ["title"=>"book2", "author"=>"omar"],
//         "b3" => ["title"=>"book3", "author"=>"a7md"]
//     ];
//     return view('iti.books', ["books"=>$books]);
// });

// Route::get('/books', "App\Http\Controllers\BookController@showAllBooks");

// Route::get('/books/{id}', function($id){
//     $books = [
//         "b1" => ["title"=>"book1", "author"=>"karim"],
//         "b2" => ["title"=>"book2", "author"=>"omar"],
//         "b3" => ["title"=>"book3", "author"=>"a7md"]
//     ];

//     if(array_key_exists($id, $books)){
//         return view('iti.showbook', ["books"=>$books[$id]]);
//     }else{
//         // abort(404);
//         return redirect('/books');
//     }
// });

// Route::get('/students', "App\Http\Controllers\StudentController@index");


// Route::get('/students', [StudentController::class, "index"])->name("students.index");
// Route::get('/students/create', [StudentController::class, "create"])->name("students.create");
// Route::post('/students/store', [StudentController::class, "store"])->name("students.store");
// Route::get('/students/show/{id}', [StudentController::class, "show"])->name("students.show");
// Route::get('/students/edit/{id}', [StudentController::class, "edit"])->name("students.edit");
// Route::post('/students/update/{id}', [StudentController::class, "update"])->name("students.update");
// Route::get('/students/delete/{id}', [StudentController::class, "destroy"])->name("students.destroy");


// Route::resource('/students', StudentsController::class);
// Route::resource('/workers', WorkerController::class);
Route::resource('/posts', PostController::class);
Route::resource('/users', UserController::class);
Route::get('/user/{user}/posts', [UserController::class, "getPosts"])->name('user.posts');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/authgate', [UserController::class, "authgate"]);

