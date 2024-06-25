<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;

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
    //dd(Blog::find('first-blog'));
    return view('blogs',[
        'blogs'=>Blog::all()
    ]);
});
Route::get('/blogs/{blog}', function($id){
    
     return view('blog',[
        'blog'=>Blog::findOrFail($id)
    ]);
})->where('blog','[A-z\d\-_]+');
