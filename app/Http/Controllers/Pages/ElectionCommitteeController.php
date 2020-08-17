<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ElectionCommittee;

class ElectionCommitteeController extends Controller
{
    public function showIndex()
    {
        return view('pages.electionCommittee');    
    }

    public function showChetra($id)
    {
        $members = ElectionCommittee::where('chettra_number', '=', $id)
                                    ->where('status', '=', 1)->get();
        return view('pages.ElectionCommittee.chettra', ['members' => $members, 'number' => $id]);
    }
}
