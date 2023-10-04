<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Blog::orderByDesc('id')->get();
        return view('blogs.index', [
            'list' => $list
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function show(Blog $blog)
    {
        return view('blogs.show', [
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    
}
