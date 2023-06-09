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
    $titlePage = 'DC Comics - Home';

    $arrayComics = config( 'db.comicsDB' );

    return view('pages.home', compact('titlePage', 'arrayComics') );
})->name('home');
