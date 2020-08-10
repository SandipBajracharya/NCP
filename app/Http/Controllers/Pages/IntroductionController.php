<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Introduction;

class IntroductionController extends Controller
{
    public function index()
    {
        $post = Introduction::orderBy('created_at','desc')->first();
        return view('pages.introduction',['post'=>$post]);
    }
}
