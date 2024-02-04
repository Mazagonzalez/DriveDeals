<?php

use App\Http\Middleware\LocaleCookieMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* TRANSLATE - EN -> ES */
Route::get('locale/{locale}', function ($locale){
    session()->put('locale', $locale);

    return Redirect::back();
 });

Route::view('/', 'main');
