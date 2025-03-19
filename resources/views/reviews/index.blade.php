@extends('layouts.dashboard')
@section('dash')
<div class="container">
    <h1>Reviews for Journal {{ $journal->title }}</h1>

    <div class="chat-container" style="background-color: #f0f0f0; padding: 15px; border-radius: 8px; overflow: hidden;">
    {{-- Display reviews as a chat --}}
    @forelse($reviews as $key => $review)
        <div class="chat-message @if($review->user_id === auth()->id()) self @endif" style="background-color: #d6e4f0; padding: 10px; margin-bottom: 10px; border-radius: 8px; overflow: hidden;">
            <div class="message-header" style="clear: both;">
                {{ $review->user->name }}
                <span class="float-end">{{ $review->created_at->diffForHumans() }}</span>
            </div>
            <div class="message-body">
                <p>{{ $review->message }}</p>
            </div>
        </div>
        @empty
    <div class="text-center" style="font-weight: bold;">
        <p>No reviews available for this journal.</p>
    </div>
@endforelse
</div>

    <form action="{{ route('reviews.store', $journal->id) }}" method="POST" style="margin-top: 10px; background-color: #ffffff; padding: 10px; border-radius: 8px;">
        @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Type your message..." name="message" required>
            <button class="btn btn-primary" type="submit">Send</button>
        </div>
    </form>





@endsection
