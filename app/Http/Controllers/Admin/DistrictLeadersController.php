<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Leaders;

class DistrictLeadersController extends Controller
{
    public function showForm()
    {
        $leaders = Leaders::orderBy('created_at','desc')->first();
        return view('admin.leadersForm', ['leaders' => $leaders]);
    }

    public function storeForm(Request $request, $id)
    {
        $this->validate($request, [
            'img1' => 'image|max:1999|nullable',
            'img2' => 'image|max:1999|nullable',
            'img3' => 'image|max:1999|nullable',
            'img4' => 'image|max:1999|nullable',
            'img5' => 'image|max:1999|nullable',
            'img6' => 'image|max:1999|nullable',
        ]);
   
        $leaders = Leaders::find($id);
        if($request->hasFile('img1'))
        {
            $FilenameWithExtension1 = $request->file('img1')->getClientOriginalName();
            $Filename1 = pathinfo($FilenameWithExtension1, PATHINFO_FILENAME);
            $Extension1 = $request->file('img1')->getClientOriginalExtension();
            $FileToStore1 = $Filename1.'_'.time().'.'.$Extension1;
            $path1 = $request->file('img1')->storeAs('/public/DistrictLeaders',$FileToStore1);

            if($request->file('img1') != 'noimage.jpg')
            {
                Storage::delete('public/DistrictLeaders/'.$leaders->image_1);
            }        
        }

        if($request->hasFile('img2'))
        {
            $FilenameWithExtension2 = $request->file('img2')->getClientOriginalName();
            $Filename2 = pathinfo($FilenameWithExtension2, PATHINFO_FILENAME);
            $Extension2 = $request->file('img2')->getClientOriginalExtension();
            $FileToStore2 = $Filename2.'_'.time().'.'.$Extension2;
            $path2 = $request->file('img2')->storeAs('/public/DistrictLeaders',$FileToStore2);

            Storage::delete('public/DistrictLeaders/'.$leaders->image_2);
        }

        if($request->hasFile('img3'))
        {
            $FilenameWithExtension3 = $request->file('img3')->getClientOriginalName();
            $Filename3 = pathinfo($FilenameWithExtension3, PATHINFO_FILENAME);
            $Extension3 = $request->file('img3')->getClientOriginalExtension();
            $FileToStore3 = $Filename3.'_'.time().'.'.$Extension3;
            $path3 = $request->file('img3')->storeAs('/public/DistrictLeaders',$FileToStore3);

            Storage::delete('public/DistrictLeaders/'.$leaders->image_3);
        }

        if($request->hasFile('img4'))
        {
            $FilenameWithExtension4 = $request->file('img4')->getClientOriginalName();
            $Filename4 = pathinfo($FilenameWithExtension4, PATHINFO_FILENAME);
            $Extension4 = $request->file('img4')->getClientOriginalExtension();
            $FileToStore4 = $Filename4.'_'.time().'.'.$Extension4;
            $path4 = $request->file('img4')->storeAs('/public/DistrictLeaders',$FileToStore4);

            Storage::delete('public/DistrictLeaders/'.$leaders->image_4);
        }

        if($request->hasFile('img5'))
        {
            $FilenameWithExtension5 = $request->file('img5')->getClientOriginalName();
            $Filename5 = pathinfo($FilenameWithExtension5, PATHINFO_FILENAME);
            $Extension5 = $request->file('img5')->getClientOriginalExtension();
            $FileToStore5 = $Filename5.'_'.time().'.'.$Extension5;
            $path5 = $request->file('img5')->storeAs('/public/DistrictLeaders',$FileToStore5);

            Storage::delete('public/DistrictLeaders/'.$leaders->image_5);
        }

        if($request->hasFile('img6'))
        {
            $FilenameWithExtension6 = $request->file('img6')->getClientOriginalName();
            $Filename6 = pathinfo($FilenameWithExtension6, PATHINFO_FILENAME);
            $Extension6 = $request->file('img6')->getClientOriginalExtension();
            $FileToStore6 = $Filename6.'_'.time().'.'.$Extension6;
            $path6 = $request->file('img6')->storeAs('/public/DistrictLeaders',$FileToStore6);

            Storage::delete('public/DistrictLeaders/'.$leaders->image_6);
        }
    
        if($request->hasFile('img1')){
            $leaders->image_1 = $FileToStore1;
        }
        if($request->hasFile('img2')){
            $leaders->image_2 = $FileToStore2;
        }
        if($request->hasFile('img3')){
            $leaders->image_3 = $FileToStore3;
        }
        if($request->hasFile('img4')){
            $leaders->image_4 = $FileToStore4;
        }
        if($request->hasFile('img5')){
            $leaders->image_5 = $FileToStore5;
        }
        if($request->hasFile('img6')){
            $leaders->image_6 = $FileToStore6;
        }

        $leaders->save();

        return redirect('/admin/leaders')->with('success','Leaders updated!');
    }
}
