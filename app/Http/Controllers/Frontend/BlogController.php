<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index() {
        return view('frontend.blog.index');
    }

    public function detail($slug, $id) {
        return view('frontend.blog.detail');
    }
}
