<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PressRelease;

class HomeController extends Controller
{
    public function index()
    {
        $contents = PressRelease::orderBy('created_at','desc')->paginate(4);
        return view('pages.home',['contents' => $contents]);
    }
}
