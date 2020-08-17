<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\OnlineGallery;

class OnlineGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = OnlineGallery::orderBy('created_at','desc')->get();
        return view('admin.OnlineGallery.galleryIndex', ['gallery' => $gallery]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.OnlineGallery.galleryForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation for image
        if(!empty($request->input('radio'))){
            if($request->input('radio') == 1){
                $this->validate($request, [
                'title' => 'required|string|max:255',
                'file' => 'image|max:1999|nullable|required',
                ]);
                
                // return $request->input('radio');
            }
            //validation for video
            elseif($request->input('radio') == 2){
                $this->validate($request, [
                    'title' => 'required|string|max:255',
                    'file' => 'mimes:mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required',
                ]);
                    
                // return $request->input('radio');
            }
            //validation for audio      
            else{
                $this->validate($request, [
                    'title' => 'required|string|max:255',
                    'file' => 'mimes:mp3,mpeg,ogg,wav|max:100040|required',
                ]);
                
                // return $request->input('radio');
            }

        }else
        {
            return redirect()->back()->with('error','Please select File Type');
        }

        $gallery = new OnlineGallery;
        if($request->hasFile('file'))
        {
            $FilenameWithExtension1 = $request->file('file')->getClientOriginalName();
            $Filename1 = pathinfo($FilenameWithExtension1, PATHINFO_FILENAME);
            $Extension1 = $request->file('file')->getClientOriginalExtension();
            $FileToStore1 = $Filename1.'_'.time().'.'.$Extension1;
        }

        $gallery->title = $request->input('title');
        $gallery->file = $FileToStore1;
        $gallery->radio = $request->input('radio');
        $gallery->save();
        //storing the file in storage directory
        $path1 = $request->file('file')->storeAs('/public/OnlineGallery/'.$gallery->gallery_type, $FileToStore1);  

        return redirect()->back()->with('success', $gallery->gallery_type.' stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = OnlineGallery::find($id);
        return view('admin.OnlineGallery.galleryShow', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = OnlineGallery::find($id);
        
        if($item->file != "nocontent.jpg"){
            Storage::delete('/public/OnlineGallery/'.$item->gallery_type.'/'.$item->file);
        }

        $item->delete();

        return redirect('/admin/onlinegallery')->with('success','Item deleted.');
    }
}
