<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        //$categories = Category::all();
        //$tags = Tag::all();

        return view('index');
    }

    public function showAllBlogs()
    {
        $blogs = Blog::with('author', 'categories','tags')->latest()->paginate(8);

        return view('blogs', compact('blogs'));
    }

    public function showBlog($id)
    {
        $blog = Blog::with('author','categories','tags')->findOrFail($id);

        return view('blog', compact('blog'));
    }


}
