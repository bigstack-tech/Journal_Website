<x-app-layout>
    <br>
    <div style="display: flex; flex-direction:row">
        <div style="padding:10px; border-right: 1px solid silver">
            <ul>
                <h2 style="font-size: 25px; color:green">Mastering Admin Interface</h2>
                <li><a href="{{ route('dashboard') }}">Guide</a></li>
            </ul>
            {{-- <ul>
                <h2 style="font-size: 25px; color:green">Manage Administration</h2>
                <li><a href="manage_admins">View & Edit Admins</a></li>
            </ul> --}}
            <ul>
                <h2 style="font-size: 25px; color:green">Manage Publications</h2>
                <li><a href="{{ route('view.publications') }}">View All Publications</a></li>
                <li><a href="{{ route('pending.publications') }}">Pending Publications</a></li>
                <li><a href="{{ route('rejected.publications') }}">Rejected Publications</a></li>
            </ul>
            <ul>
                <h2 style="font-size: 25px; color:green">Manage Editorials</h2>
                <li><a href="{{ route('editorials') }}">View and Edit Editorials</a></li>
            </ul>
            <ul>
                <h2 style="font-size: 25px; color:green">Manage Email</h2>
                <li><a href="{{ route('email') }}">View and Edit Email</a></li>
            </ul>
        </div>
        <div style="padding: 10px; width:100%">
            <h1>Rejected Publications</h1>
            <br><br>
<div>
@foreach ($Journal_submission as $post)
<br>
@if ($post->status === "Rejected")
    <div style="display: flex; border:1px solid silver; padding 10px">
        <div style="flex-basis: 60%">
            <div>
                <h3>Journal: {{ $post->title }}</h3>
                <p>By: {{ $post->author_name }}</p>
                <p>{{ $post->abstract }}</p>
                <p>Posted: {{ $post->created_at }}</p>
                <p>Status: <span style="color: red">{{ $post->status }}</span></p>
            </div>
        </div>
        <div style="display: flex">
            <a href="post/{{ $post->file }}" target="_blank">View</a> &nbsp;
            |  &nbsp;
            <form action="{{ route('update.journalStatus', $post->id) }}" method="POST">
                @csrf
                <input type="hidden" name="status" value="Pending">
                <input type="submit" value="Send to Pending" style="padding:10px; background-color: lightgreen">
            </form> &nbsp;
        </div>
    </div>
    @endif
    <br>
@endforeach
        </div>
    </div>
</x-app-layout>
