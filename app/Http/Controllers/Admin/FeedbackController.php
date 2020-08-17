<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Feedback;

class FeedbackController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth'], ['except'=>['create', 'store']]);
    }

    public function index()
    {
        $feedbacks = Feedback::orderBy('created_at','desc')->get();
        // return $feedbacks;
        return view('admin.Feedback.feedbackList',['feedbacks' => $feedbacks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.feedback');
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
            'fullname' => 'required|string|min:4|max:255',
            'phone' => 'required|regex:/[0-9]/|not_regex:/[a-zA-Z]/|min:7|max:13',
            'email' => 'required|email|unique:feedback|string|max:255',
            'feedback' => 'required|string|min:10',
        ]);

        //Google reCaptcha
        $token = $request->input('g-recaptcha-response');
        if($token){
            $url = 'https://www.google.com/recaptcha/api/siteverify';
            $remoteip = $_SERVER['REMOTE_ADDR'];
            //google verification
            $data = [
                    'secret' => config('services.recaptcha.secret'),
                    'response' => $token,
                    'remoteip' => $remoteip
                ];
            $options = [
                    'http' => [
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method' => 'POST',
                    'content' => http_build_query($data)
                    ]
                ];
                    $context = stream_context_create($options);
                    // dd($context);
                    $result = file_get_contents($url, false, $context);
                    // dd($result);
                    $resultJson = json_decode($result);
                    //  dd($resultJson);
            if ($resultJson->success == true) {
                //Validation was successful, add your form submission logic here
                // return "You are human";
                $feedback = new Feedback;
                $feedback->fullname = $request->input('fullname');
                $feedback->phone = $request->input('phone');
                $feedback->email = $request->input('email');
                $feedback->feedback = $request->input('feedback');
                $feedback->save();

                return redirect()->back()->with('success','Feedback sent. Thank you!');
            }
            else {
                return redirect()->back()->withErrors(['error' => 'reCaptcha error']);
            }
        }else
        {
            return redirect()->back()->with('error', 'Please verify the below box!');
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
        $feedback = Feedback::find($id);
        return view('admin.Feedback.feedbackShow', ['feedback' => $feedback]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // no edit
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
        // no update
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedback = Feedback::find($id);
        $feedback->delete();
        return redirect()->back()->with('success','Feedback removed.');
    }
}
