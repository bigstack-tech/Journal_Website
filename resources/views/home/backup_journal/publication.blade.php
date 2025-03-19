@extends('layouts.layout')
@section('content')
<br><br>
<section>
    <h1 style="text-align: center; color:green">Publications</h1>
    <br><br>
    @foreach ($Journal_submission as $post)
        @if($post->status === "Approved" && $post->email_status === "Sent")
           <div style=" border:1px solid silver; padding 10px">
                <a href="post/{{ $post->file }}" target="_blank" style="text-decoration: none;">
                    <div>
                        <h3>Journal: {{ $post->title }}</h3>
                        <p>By: {{ $post->author_name }}</p>
                        <p>{{ $post->abstract }}</p>
                        <p>Posted: {{ $post->created_at }}</p>
                    </div>
                </a>
           </div>
            <br>
        @endif
    @endforeach
</section>
@endsection
