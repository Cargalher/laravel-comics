<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');   

Route::get('/comics', function () {


    $comics = config('comic.data');
    return view('comics', compact('comics'));  
    })->name('comics');
    
    
Route::get('/characters', function () {
       
    return view('characters');  
    })->name('characters');
    
Route::get('/movies', function () {
       
    return view('movies');  
    })->name('movies');






// Route::get('/tv', function () {
       
//     return view('tv');  
//     })->name('tv');

// Route::get('/movies', function () {
       
//     return view('movies');  
//      })->name('movies');

// Route::get('/movies', function () {
       
//     return view('movies');  
//     })->name('movies');

// Route::get('/movies', function () {
       
//     return view('movies');  
//     })->name('movies');


// Route::get('/movies', function () {
       
//     return view('movies');  
//     })->name('movies');

// Route::get('/movies', function () {
       
//     return view('movies');  
//     })->name('movies');

// Route::get('/movies', function () {
       
//     return view('movies');  
//     })->name('movies');