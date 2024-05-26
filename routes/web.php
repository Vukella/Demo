<?php

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', [BlogController:: class, 'index'])->name('home');

Route::get('/blogs', [BlogController:: class, 'showAllBlogs'])->name('blogs.index');
Route::get('/blogs/category/{category:name}', [BlogController:: class, 'showBlogsByCategory']);
Route::get('/blogs/tag/{tag:name}', [BlogController:: class, 'showBlogsByTag']);

Route::get('/blog/{blog:slug}', [BlogController:: class, 'show']);
