<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Journal_submission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\Years;







class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $years = Years::all();

        return view('home.submission', ['years' => $years]);
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
       

        $request->validate([
            'status'=>'required',
            'title'=>'required',
            'abstract'=>'required',
            'author'=>'required',
            'institute'=>'required',
            'email'=>'required|email',
            'email_status'=>'required',
            'contact'=>'required',
            'country'=>'required',
            'file'=>'required',
            'word'=>'required',
            'page'
        ]);

        $user = Auth::user();

        $data = new Journal_submission;
        $data->user_id = $user->id;
        $data->title=$request->title;
        $data->abstract = $request->abstract;
        $data->page = $request->page;
        $data->word = $request->word;
        
        $data->author_name =$request->author;
        $data->institute_organization=$request->institute;
        $data->email=$request->email;
        $data->contact=$request->contact;
        $data->country=$request->country;
        $data->status=$request->status;
        $data->email_status=$request->email_status;

        $file=$request->file;
        $file=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('post',$file);
        $data->file=$file;

        $data->save();
        return redirect()->back()->with('mssg', "Journal has been submitted Successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $userId = Auth::id();

       $journals = Journal_submission::where('user_id', $userId)->get();
        return view('home.journalss',['journals' => $journals]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $journal = Journal_submission::findOrFail($id);
        return view('home.edit-journal', compact('journal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
    
        $journal = Journal_submission::findOrFail($id);

        $journal->title = $request->title;
        $journal->abstract = $request->abstract;
    
        // Set other fields...
    
        $journal->author_name = $request->author;
        $journal->institute_organization = $request->institute;
        $journal->first = $request->first;
        $journal->last = $request->last;
        $journal->citation_title = $request->citation_title;
        $journal->year = $request->year;
        $journal->citation_issue = $request->citation_issue;
        $journal->email = $request->email;
        $journal->contact = $request->contact;
        $journal->country = $request->country;
        $journal->status = $request->status;
        $journal->email_status = $request->email_status;
    
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('post'), $fileName);
            $journal->file = $fileName;
        }
    
        $journal->save();
    
        return redirect()->back()->with('mssg', 'Journal updated successfully!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $journal = Journal_submission::findOrFail($id);
    
            // Delete the associated file from the 'post' directory
            $file_path = public_path('post/' . $journal->file);
            if (File::exists($file_path)) {
                File::delete($file_path);
            }
    
            $journal->delete();
    
            return redirect()->back()->with('success', 'Journal deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting journal: ' . $e->getMessage());
        }
    }
    
}
