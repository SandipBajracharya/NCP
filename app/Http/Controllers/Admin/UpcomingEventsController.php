<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\UpcomingEvents;

class UpcomingEventsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth'], ['except' => 'index']);
    }

    public function index()
    {
        $posts = UpcomingEvents::orderBy('created_at','desc')->get();
        return view('admin.UpcomingEvents.upcomingEventList', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.UpcomingEvents.upcomingEventForm');
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
            'pdf' => 'required|mimes:ppt,pptx,doc,docx,pdf,xls,xlsx|max:204800',            
        ]);


        if($request->hasFile('pdf'))
        {
            // return $request->file('pdf');
            // return "Hello";
            $FilenameWithExtension1 = $request->file('pdf')->getClientOriginalName();
            $Filename1 = pathinfo($FilenameWithExtension1, PATHINFO_FILENAME);
            $Extension1 = $request->file('pdf')->getClientOriginalExtension();
            $store = $Filename1.'_'.time().'.'.$Extension1;
            $path = $request->file('pdf')->storeAs('/public/UpcomingEvents', $store); 
        }
 
        $post = new UpcomingEvents;
        $post->title = $request->input('title');
        $post->pdf = $store;
        $post->save();
        Session::flash('success','Content Stored');
        return redirect('/upcomingevents');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = UpcomingEvents::find($id);
        return view('admin.UpcomingEvents.upcomingEventEdit', ['post' => $post]);
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
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'pdf' => 'nullable|mimes:pdf|max:204800',            
        ]);

        $post = UpcomingEvents::find($id);
        if($request->hasFile('pdf'))
        {
            $FilenameWithExtension1 = $request->file('pdf')->getClientOriginalName();
            $Filename1 = pathinfo($FilenameWithExtension1, PATHINFO_FILENAME);
            $Extension1 = $request->file('pdf')->getClientOriginalExtension();
            $store = $Filename1.'_'.time().'.'.$Extension1;
            Storage::delete('/public/UpcomingEvents/'.$post->pdf);
            $path = $request->file('pdf')->storeAs('/public/UpcomingEvents', $store); 
            $post->pdf = $store;
        }
 
        $post->title = $request->input('title');
        $post->save();

        return redirect('/upcomingevents')->with('success','Content Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= UpcomingEvents::find($id);
        Storage::delete('/public/UpcomingEvents/'.$post->pdf);
        $post->delete();
        return redirect()->back()->with('success','Item deleted successfully');
    }
}
