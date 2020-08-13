<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PressRelease;
use App\Leaders;

class HomeController extends Controller
{
    public function index()
    {
        $contents = PressRelease::orderBy('created_at','desc')->paginate(4);
        $leaders = Leaders::orderBy('updated_at','desc')->first();
        return view('pages.home',['contents' => $contents , 'leaders' => $leaders]);
    }
}
