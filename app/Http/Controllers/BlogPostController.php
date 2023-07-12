<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class BlogPostController extends Controller {
    public function index() {
        $blogPosts = BlogPost::all();
        // return response()->json($blogPosts);
        return view('blog.index', compact('blogPosts'));
    }

    public function show($id) {
        $blogPost = BlogPost::findOrFail($id);
        return view('blog.show', compact('blogPost'));
        // return response()->json($blogPost);
    }
}
