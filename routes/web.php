<?php

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', [BlogController:: class, 'index'])->name('home');
Route::get('/blogs', [BlogController:: class, 'showAllBlogs'])->name('blogs.index');
Route::get('/blog/{id}', [BlogController:: class, 'showBlog'])->name('blog.show');
