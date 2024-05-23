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
        return view('index');
    }

    public function showAllBlogs()
    {
        $categories = Category::all();
        $tags = Tag::all();

        $blogs = Blog::with('author', 'categories','tags')->latest()->paginate(8);

        return view('blogs', [
        'blogs' => $blogs, 
        'categories' => $categories,
        'tags' => $tags]);
    }

    public function showBlog($id)
    {
        $blog = Blog::with('author','categories','tags')->findOrFail($id);
        $categories = $blog->categories;
        $tags = $blog->tags;

        return view('blog', compact('blog', 'categories', 'tags'));
    }


}
