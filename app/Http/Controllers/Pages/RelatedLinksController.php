<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\RelatedLinks;

class RelatedLinksController extends Controller
{
    public function index()
    {   
        $links = RelatedLinks::orderBy('created_at', 'desc')->get();
        return view('pages.relatedLinks', ['links' => $links]);
    }
}
