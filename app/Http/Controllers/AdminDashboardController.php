<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journal_submission;
use App\Models\Editorial;
use Illuminate\Support\Facades\DB;


class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
        return view('Home');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
