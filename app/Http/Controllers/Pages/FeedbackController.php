<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function showForm()
    {
        return view('pages.feedback');
    }

    public function storeForm()
    {
        return view('pages.feedback');
    } 
}
