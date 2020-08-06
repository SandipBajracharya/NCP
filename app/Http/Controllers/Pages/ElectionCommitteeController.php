<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ElectionCommitteeController extends Controller
{
    public function showIndex()
    {
        return view('pages.electionCommittee');    
    }

    public function showChetra()
    {
        return view('Pages.ElectionCommittee.chettra1');
    }
}
