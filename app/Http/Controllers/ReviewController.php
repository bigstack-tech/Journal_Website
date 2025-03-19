<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Journal_submission;

class ReviewController extends Controller
{


    //
   public function index($id)
{
    $user = auth()->user();

    // Retrieve the specified journal
    $journal = Journal_submission::findOrFail($id);

    // Retrieve reviews related to the specified journal without authorization check
   $reviews = Review::where('journal_id', $journal->id)
    ->orWhere(function ($query) use ($user, $journal) {
        $query->where('user_id', $user->id)
            ->where('journal_id', $journal->id);
    })
    ->with(['journal', 'user'])
    ->orderBy('created_at')
    ->get();

    return view('reviews.index', compact('reviews', 'journal'));
}

    public function store(Request $request, $id)
    {
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        // Find the specified journal
        $journal = Journal_submission::findOrFail($id);

        // Create a new review
        $review = new Review();
        $review->journal_id = $journal->id;
        $review->user_id = auth()->user()->id;
        $review->message = $request->input('message');
        $review->save();

        return redirect()->route('reviews.index', ['id' => $journal->id])
            ->with('success', 'Your message has been sent!');
    }
}
