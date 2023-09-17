<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController; 
use App\Http\Resources\UserResource; 

use App\Http\Controllers\BookController; 
use App\Http\Resources\BookResource; 

use App\Http\Controllers\PostController; 
use App\Http\Resources\PostResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/post/{id}',[PostController::class,'show']);
Route::get('/posts',[PostController::class,'index']);

Route::resource('users', UserController::class);
Route::resource('posts', PostController::class);

Route::get('/users', 'UserController@index');

// Route for listing users using UserController@index
Route::get('/users', [UserController::class, 'index'])
    ->name('users.index')
    ->middleware('auth:api'); // Optional middleware

// Route for retrieving a single user using UserController@show
Route::get('/users/{user}', [UserController::class, 'show'])
    ->name('users.show')
    ->middleware('auth:api'); // Optional middleware

// Route for creating a new user using UserController@store
Route::post('/users', [UserController::class, 'store'])
    ->name('users.store')
    ->middleware('auth:api'); // Optional middleware

// Route for updating a user using UserController@update
Route::put('/users/{user}', [UserController::class, 'update'])
    ->name('users.update')
    ->middleware('auth:api'); // Optional middleware

// Route for deleting a user using UserController@destroy
Route::delete('/users/{user}', [UserController::class, 'destroy'])
    ->name('users.destroy')
    ->middleware('auth:api'); // Optional middleware

    // Route for listing books using BookController@index
Route::get('/books', [BookController::class, 'index'])
->name('books.index')
->middleware('auth:api'); // Optional middleware

// Route for retrieving a single book using BookController@show
Route::get('/books/{book}', [BookController::class, 'show'])
->name('books.show')
->middleware('auth:api'); // Optional middleware

// Route for creating a new book using BookController@store
Route::post('/books', [BookController::class, 'store'])
->name('books.store')
->middleware('auth:api'); // Optional middleware

// Route for updating a book using BookController@update
Route::put('/books/{book}', [BookController::class, 'update'])
->name('books.update')
->middleware('auth:api'); // Optional middleware

// Route for deleting a book using BookController@destroy
Route::delete('/books/{book}', [BookController::class, 'destroy'])
->name('books.destroy')
->middleware('auth:api'); // Optional middleware

// Route for listing posts using PostController@index
Route::get('/posts', [PostController::class, 'index'])
    ->name('posts.index')
    ->middleware('auth:api'); // Optional middleware

// Route for retrieving a single post using PostController@show
Route::get('/posts/{post}', [PostController::class, 'show'])
    ->name('posts.show')
    ->middleware('auth:api'); // Optional middleware

// Route for creating a new post using PostController@store
Route::post('/posts', [PostController::class, 'store'])
    ->name('posts.store')
    ->middleware('auth:api'); // Optional middleware

// Route for updating a post using PostController@update
Route::put('/posts/{post}', [PostController::class, 'update'])
    ->name('posts.update')
    ->middleware('auth:api'); // Optional middleware

// Route for deleting a post using PostController@destroy
Route::delete('/posts/{post}', [PostController::class, 'destroy'])
    ->name('posts.destroy')
    ->middleware('auth:api'); // Optional middleware
