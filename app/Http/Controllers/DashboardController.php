<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journal_submission;
use App\Models\Editorial;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    //
    public function index()
{
    $user = Auth::user();

    if (!$user) {
        // Handle the case where the user is not authenticated
        // You may redirect them to the login page or handle it as needed
        return redirect()->route('login');
    }
    if ($user->role === 'user') {
    $journalCount = Journal_submission::where('user_id', $user->id)->count();
    $approvedJournals = Journal_submission::where('user_id', $user->id)->where('status', 'Approved')->count();
    $pendingJournals = Journal_submission::where('user_id', $user->id)->where('status', 'Pending')->count();
    $rejectedJournals = Journal_submission::where('user_id', $user->id)->where('status', 'Rejected')->count();
   

    $journalUnsentEmail = Journal_submission::where('user_id', $user->id)
        ->where('status', 'Approved')
        ->where('email_status', 'Pending')
        ->count();

    return view('Home', [
        'siteInformation' => [
            'journalStats' => $journalCount,
            'journalApprovedStats' => $approvedJournals,
            'journalPendingStats' => $pendingJournals,
            'journalRejectedStats' => $rejectedJournals,
            'unsentEmailStats' => $journalUnsentEmail,
        ]
    ]);
}else {
    $journalCount = 0;
        $Journal_submission = Journal_submission::all();
        $Editorial = Editorial::all();

        foreach($Journal_submission as $data) {
            $journalCount = $journalCount + 1;
        }
        $totalJournals = $journalCount;

        $journalApprovedCount = 0;
        $status = DB::table('journal_submissions')->pluck('status');
        foreach ($status as $statusVal) {
            if (($statusVal === 'Approved')) {
                $journalApprovedCount = $journalApprovedCount + 1;
            }
        }
        $approvedJournals = $journalApprovedCount;

        $journalPendingCount = 0;
        $status = DB::table('journal_submissions')->pluck('status');
        foreach ($status as $statusVal) {
            if (($statusVal === 'Pending') ){
                $journalPendingCount = $journalPendingCount + 1;
            }
        }
        $pendingJournals = $journalPendingCount;

        $journalRejectedCount = 0;
        $status = DB::table('journal_submissions')->pluck('status');
        foreach ($status as $statusVal) {
            if (($statusVal === 'Rejected')) {
                $journalRejectedCount = $journalRejectedCount + 1;
            }
        }
        $rejectedJournals = $journalRejectedCount;

        $EditorialCount = 0;
        foreach($Editorial as $data) {
            $EditorialCount = $EditorialCount + 1;
        }
        $totalEditorial = $EditorialCount;


        // $journalUnsentEmailCount = 0;
        // $status = DB::table('Journal_submissions')->pluck('email_status');
        // foreach ($status as $statusVal) {
        //     if (($statusVal === 'Pending')) {
        //         $journalUnsentEmailCount = $journalUnsentEmailCount + 1;
        //     }
        // }
        // $journalUnsentEmail = $journalUnsentEmailCount;

        $journalUnsentEmailCount = 0;
        foreach($Journal_submission as $data) {
            if ($data['status'] === "Approved" && $data['email_status'] === "Pending") {
                $journalUnsentEmailCount = $journalUnsentEmailCount + 1;
            }
        }
        $journalUnsentEmail = $journalUnsentEmailCount;

        return view('Home', [
            'siteInformation' =>[
                    'journalStats' =>  $totalJournals,
                    'journalApprovedStats' =>  $approvedJournals,
                    'journalPendingStats' =>  $pendingJournals,
                    'journalRejectedStats' =>  $rejectedJournals,
                    'editorialStats' =>  $totalEditorial,
                    'unsentEmailStats' =>  $journalUnsentEmail
            ]
        ]);
}

}
}
