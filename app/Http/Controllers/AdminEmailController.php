<?php

namespace App\Http\Controllers;

use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use App\Models\Journal_submission;
use Illuminate\Support\Facades\Notification;

use App\Models\EmailTemplate;

class AdminEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $EmailTemplate = EmailTemplate::all();
        return view('admin.email', compact('EmailTemplate'));
    }

    // public function AdminCreateEmail($id) {
    //     // $Journal_submission = Journal_submission::all();
    //     $data = Journal_submission::find($id);
    //     return view('admin.create_email', compact('data'));
    // }

    // public function AdminSendEmailController(Request $request, $id) {
    //     $request->validate([
    //         'email_status'=>'required',
    //         'greeting'=>'required',
    //         'body'=>'required',
    //         'actiontext'=>'required',
    //         'actionurl'=>'required',
    //         'endtext'=>'required',
    //     ]);
    //     $Journal_submission = Journal_submission::find($id);
    //     $details = array();

    //     $post=Journal_submission::find($id);
    //     $post->email_status=$request->email_status;

    //     $details['greeting']=$request->greeting;
    //     $details['body']=$request->body;
    //     $details['actiontext']=$request->actiontext;
    //     $details['actionurl']=$request->actionurl;
    //     $details['endtext']=$request->endtext;

    //     Notification::send($Journal_submission, new SendEmailNotification($details));
    //     $post->save();

    //     return redirect()->to('/email')->with('mssg', 'Email has been sent Successfully');
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=EmailTemplate::find($id);
        $data->greeting=$request->greeting;
        $data->body=$request->body;
        $data->action_text=$request->actiontext;
        $data->action_url=$request->actionurl;
        $data->end_text=$request->endtext;
        $data->save();
        return redirect()->back()->with('mssg', "Email Template has been Updated Successfully !");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
