<?php

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/blogs', function () {
    return view('blogs',[
        'blogs' => Blog::all()
    ]);
});

Route::get('/blogs/{blog:slug}', function ($id) {
    return view('blog-details');
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request){

});