<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index() {
        return view('frontend.product.index');
    }

    public function detail($slug, $id) {
        return view('frontend.product.detail');
    }
}
