<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\RelatedLinks;
use App\Rules\Url;

class RelatedLinksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $links = RelatedLinks::orderBy('created_at', 'desc')->get();
        return view('admin.RelatedLinks.relatedLinksList', ['links' => $links]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.RelatedLinks.relatedLinksForm');
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
            'link' => new URL,
        ]);

        $post = new RelatedLinks;
        $post->links = $request->input('link');
        $post->save();

        return redirect()->back()->with('success','Link stored');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $links = RelatedLinks::find($id);
        return view('admin.RelatedLinks.relatedLinksEdit', ['links' => $links]);
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
        $link = RelatedLinks::find($id);

        $this->validate($request, [
            'link' => new Url,
        ]);

        $link->links = $request->input('link');

        $link->save();

        return redirect('/admin/relatedlinks')->with('success','Content Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = RelatedLinks::find($id);
        $link->delete();

        return redirect()->back()->with('success', 'Content deleted');
    }
}
