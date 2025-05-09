<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        return view("blog.index");
    }

    public function store($id)
    {
        return view("blog.show", ['id' => $id]);
    }
}
