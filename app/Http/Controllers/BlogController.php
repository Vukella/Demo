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

        //$blogs = Blog::with('author', 'categories','tags')->latest()->paginate(8);
        $blogs = Blog::with('author', 'categories','tags')->orderBy('published_at','desc')->paginate(8);
        $totalPages = $blogs->lastPage();

        return view('blogs', [
        'blogs' => $blogs, 
        'categories' => $categories,
        'tags' => $tags,
        'totalPages' => $totalPages
        ]);
    }

    public function showBlogsByCategory(Category $category)
    {
        $categories = Category::all();
        $tags = Tag::all();

        $blogs = $category->blogs()->with('author', 'categories', 'tags')->orderBy('published_at', 'desc')->paginate(8);
        $totalPages = $blogs->lastPage();

        return view('blogs', [
        'blogs' => $blogs, 
        'categories' => $categories,
        'tags' => $tags,
        'totalPages' => $totalPages,
        'currentCategory' => $category
        ]);
    }

    public function showBlogsByTag(Tag $tag)
    {
        $categories = Category::all();
        $tags = Tag::all();

        $blogs = $tag->blogs()->with('author', 'categories', 'tags')->orderBy('published_at', 'desc')->paginate(8);
        $totalPages = $blogs->lastPage();

        return view('blogs', [
        'blogs' => $blogs, 
        'categories' => $categories,
        'tags' => $tags,
        'totalPages' => $totalPages
        ]);
    }

    public function show(Blog $blog)
    {
        
        $categories = $blog->categories;
        $tags = $blog->tags;

        $allCategories = Category::all();
        $allTags = Tag::all();

        return view('blog', compact('blog', 'categories', 'tags', 'allCategories', 'allTags'));
    }


}
