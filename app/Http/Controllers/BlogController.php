<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use SebastianBergmann\CodeUnit\FunctionUnit;

class BlogController extends Controller
{
    public Function index(){
        return view('blogs', [
            "title" => "Blogs",
            "blogs" => Blog::all()
        ]);
    }

    public Function show($slug){
        return view('blog', [
            "title" => "Single Blog",
            "blog" => Blog::find($slug)
        ]);
    }
}
