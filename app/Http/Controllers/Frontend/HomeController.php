<?php

namespace App\Http\Controllers\Frontend;

use App\Components\Functions;
use App\Model\Account;
use App\Model\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;

class HomeController extends Controller
{
    public function index() {
        return view('frontend.home.index');
    }

    public function thankYou(Request $request) {
        $from = $request->input('from');

        return view('frontend.home.thank_you', compact('from'));
    }
}
