<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('blogs.index',[
            'blogs' => Blog::latest()->filter(
                request(['category','authors'])
            )->paginate(10)->withQueryString(),
            'categories'=> $categories,
            'tags'=> $tags
        ]);
    }

    public function show(Blog $blog)
    {
        $categories = Category::all();
        $tags = Tag::all();
        
        return view('blogs.show',[
            'blog'=> $blog,
            'categories' => $categories,
            'tags' => $tags
            ]);
    }
}
