<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailTemplate;
use App\Models\Journal_submission;

use Illuminate\Support\Facades\DB;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;


class AdminPublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Journal_submission = Journal_submission::all();
        return view('admin.view_publications', compact('Journal_submission'));
    }

    public function AdminPendingPublicationController() {
        $pendingJournals = Journal_submission::where('status', 'Pending')->get();


        $EmailTemplate = EmailTemplate::all();
        return view('admin.pending_publications', compact('pendingJournals', 'EmailTemplate'));
    }

     public function AdminUpdatePendingStatusController(Request $request, string $id) {
        $post = Journal_submission::find($id);
        $result = $request->status;
        $post->status = $result;
    
        if ($result == "Approved") {
          //

        } elseif ($result == "Pending" || $result == "Rejected") {
            // ... (your existing "Pending" or "Rejected" logic)
        }
    
        $post->save();
        return redirect()->back();
    }
    

    public function AdminRejectedController() {
        $Journal_submission = Journal_submission::all();
        return view('admin.rejected_publications', compact('Journal_submission'));
    }
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
        $post=Journal_submission::find($id);
        $post->status=$request->status;
        $post->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
