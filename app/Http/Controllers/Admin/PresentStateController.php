<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ElectionCommittee;

class PresentStateController extends Controller
{
    public function active($id)
    {
        $member = ElectionCommittee::find($id);
        $member->status = 1;
        $member->save();
        return redirect()->back();
    }

    public function inactive($id)
    {
        $member = ElectionCommittee::find($id);
        $member->status = 0;
        $member->save();
        return redirect()->back();
    }
}
