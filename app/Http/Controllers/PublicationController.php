<?php

namespace App\Http\Controllers;

use App\Models\Years;
use Illuminate\Http\Request;
use App\Models\Journal_submission;
use Illuminate\Support\Facades\DB;


class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id = null)
    {
        // Validate $id or handle validation as needed
    
        $journalSubmissions = Journal_submission::all();
        $years = Years::all();
    
        
        if ($id) {
            $journalSubmissions = $journalSubmissions->where('year', $id);
        }
    
        return view("home.journals", [
            "Journal_submission" => $journalSubmissions,
            "Years" => $years,
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
        // Validate $id or handle validation as needed
    
        $journalSubmissions = Journal_submission::where('year', $id)->get();
        $years = Years::all();
    
        return view("home.journals", [
            "Journal_submission" => $journalSubmissions,
            "Years" => $years,
        ]);
    }

    public function show_abstract(string $id) {
        $Journal_submission = DB::table('journal_submissions')
        ->where('id', '=', $id)
        ->get();

        return view("home.journal_information", 
            [
                "Journal_submission"=>$Journal_submission
            ]
        );
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
