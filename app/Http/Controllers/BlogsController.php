<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogsController extends Controller
{
    //
    /**
     * @return mixed
     */
    public function newBlog()
    {
        return view('new_blog');
    }
}
