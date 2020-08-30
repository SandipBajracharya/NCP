<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\UpcomingEvents;

class UpcomingEventsController extends Controller
{
    public function showEvents()
    {
        $posts = UpcomingEvents::orderBy('created_at', 'desc')->get();
        return view('Pages.upcomingEvents', ['posts' => $posts]);
    }

    public function showFile($id)
    {
        $file = UpcomingEvents::find($id);
        $File = Storage::get("/public/UpcomingEvents/$file->pdf");
        return response($File)
                    ->header('Content-Type', "application/pdf");
    }
}
