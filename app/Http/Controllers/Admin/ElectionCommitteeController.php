<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\ElectionCommittee;

class ElectionCommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = ElectionCommittee::orderBy('chettra_number','asc')->get();
        return view('admin.ElectionCommittee.electionCommitteeIndex', ['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ElectionCommittee.electionCommitteeForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!empty($request)){
            $this->validate($request, [
                'fullname' => 'required|string|max:255',
                'phone' => 'required|regex:/[0-9]/|not_regex:/[a-z]/|min:7|max:13',
                'image' => 'nullable|image|max:1999',
            ]);

            if($request->hasFile('image')){
                $FilenameWithExtension = $request->file('image')->getClientOriginalName();
                $Filename = pathinfo($FilenameWithExtension, PATHINFO_FILENAME);
                $Extension = $request->file('image')->getClientOriginalExtension();
                $FileToStore = $Filename.'_'.time().'.'.$Extension;
                $path = $request->file('image')->storeAs('/public/ChettraLeaders',$FileToStore);
            }else{
                $FileToStore = 'member.jpg';
            }

            $member = new ElectionCommittee;
            $member->fullname = $request->input('fullname');
            $member->phone = $request->input('phone');
            $member->image = $FileToStore;
            $member->chettra_number = $request->input('radio');
            $member->save();

            return redirect()->back()->with('success','Content Stored.');
        }
        else{
            return redirect()->back()->with('error','Something went wrong!');
        }
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
        $member = ElectionCommittee::find($id);
        return view('admin.ElectionCommittee.electionCommitteeEdit', ['member' => $member]); 
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
        if(!empty($request)){
            $this->validate($request, [
                'fullname' => 'required|string|max:255',
                'phone' => 'required|regex:/[0-9]/|not_regex:/[a-z]/|min:7|max:13',
                'image' => 'nullable|image|max:1999',
            ]);

            if($request->hasFile('image')){
                $FilenameWithExtension = $request->file('image')->getClientOriginalName();
                $Filename = pathinfo($FilenameWithExtension, PATHINFO_FILENAME);
                $Extension = $request->file('image')->getClientOriginalExtension();
                $FileToStore = $Filename.'_'.time().'.'.$Extension;
                $path = $request->file('image')->storeAs('/public/ChettraLeaders',$FileToStore);
            }

            $member = ElectionCommittee::find($id);
            $member->fullname = $request->input('fullname');
            $member->phone = $request->input('phone');
            if($request->hasFile('image')){
                $member->image = $FileToStore;
            }
            $member->chettra_number = $request->input('radio');
            $member->save();

            return redirect('/admin/electioncommittee')->with('success','Content Updated.');
        }
        else{
            return redirect()->back()->with('error','Something went wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = ElectionCommittee::find($id);
        if($member->image != 'member.jpg'){
            Storage::delete('public/ChettraLeaders/'.$member->image);
        }
        $member->delete();

        return redirect()->back()->with('success', 'Member removed');
    }
}
