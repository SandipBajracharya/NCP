<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Introduction;

class IntroductionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function introductionForm()
    {
        $content = Introduction::orderBy('created_at','desc')->first();
        return view('admin.introduction',['content' => $content]);
    }

    public function storeContent(Request $request, $id)
    {
        $this->validate($request, [
            'background' => 'string|required|min:10',
            'genesis_of_NC' => 'string|required|min:10',
            'imp_landmarks' => 'string|required|min:10',
        ]);

        $post = Introduction::find($id);
        $post->background = $request->input('background');
        $post->genesis_of_NC = $request->input('genesis_of_NC');
        $post->imp_landmarks = $request->input('imp_landmarks');

        $post->save();

        return redirect('/admin/introduction')->with('success','Content Changed');
    }
}
