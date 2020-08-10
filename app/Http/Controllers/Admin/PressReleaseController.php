<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PressRelease;

class PressReleaseController extends Controller
{ 
    public function __construct()
    {
        $this->middleware(['auth'], ['except' => 'show']);   
    }

    //press release content list in admin panel
    public function index()
    {
        $posts = PressRelease::all();
        return view('admin.PressRelease.contentList',['posts' => $posts]);
    }
    
    public function create()
    {
        return view('admin.PressRelease.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'body' => 'required|string|min:10',
        ]);

        $post = new PressRelease;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/')->with('success','Content stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = PressRelease::find($id);
        return view('admin.PressRelease.show',['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = PressRelease::find($id);
        return view('admin.PressRelease.edit',['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = PressRelease::find($id);

        $this->validate($request, [
            'title' => 'required|string|max:255',
            'body' => 'required|string|min:10',
        ]);

        $post->title = $request->input('title');
        $post->body = $request->input('body');

        $post->save();

        return redirect('/pressrelease')->with('success','Content Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = PressRelease::find($id);

        $post->delete();

        return redirect('/pressrelease')->with('success','Press release content deleted successfully');
    }
}
