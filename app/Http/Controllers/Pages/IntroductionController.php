<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    public function index()
    {
        return view('pages.introduction');
    }
}