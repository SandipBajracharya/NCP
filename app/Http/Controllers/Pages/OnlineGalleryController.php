<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use App\OnlineGallery;
use File;

class OnlineGalleryController extends Controller
{
    public function index()
    {   
        return view('pages.OnlineGallery.onlineGalleryList');
    }

    public function photoGallery()
    {
        $photos = OnlineGallery::where('radio', '=', '1')->orderBy('created_at','desc')->get();
        return view('pages.OnlineGallery.photoGallery', ['photos'=> $photos]);
    }

    public function showPhoto($id)
    {
        $photo = OnlineGallery::find($id);
        return view('pages.OnlineGallery.showPhoto', ['photo' => $photo]);
    }

    public function videoGallery()
    {
        $videos = OnlineGallery::where('radio', '=', '2')->orderBy('created_at','desc')->get();
        return view('pages.OnlineGallery.videoGallery', ['videos'=> $videos]);
    }   

    public function playVideo($id)
    {
        $video = OnlineGallery::find($id);
        $fileContents = Storage::disk('local')->get("/public/OnlineGallery/Video/$video->file");
        // $fileContents = Storage::files(public_path('storage/OnlineGallery/Video/'.$video->file));
        $response = Response::make($fileContents, 200);
        $response->header('Content-Type', "video/mp4");
        return $response;
    }

    public function audioGallery()
    {
        $audios = OnlineGallery::where('radio', '=', '3')->orderBy('created_at','desc')->get();
        return view('pages.OnlineGallery.audioGallery', ['audios'=> $audios]);
    }

    public function playAudio($id)
    {
        $audio = OnlineGallery::find($id);
        $fileContents = Storage::disk('local')->get("/public/OnlineGallery/Audio/$audio->file");
        // $fileContents = Storage::get('/storage/OnlineGallery/Audio/'.$audio->file);
        $response = Response::make($fileContents, 200);
        $response->header('Content-Type', "audio/mpeg");
        return $response;
    }
}
