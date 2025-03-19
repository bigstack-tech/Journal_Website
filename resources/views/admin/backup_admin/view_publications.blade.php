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
            <h1>Publications</h1>
            <br><br>
            <hr>
            <br>
@foreach ($Journal_submission as $post)
<hr>
<br>
    <div style="display: flex">
        @if ($post->status)
            <div style="flex-basis: 60%">
                <div>
                    <h3>Journal: {{ $post->title }}</h3>
                    <p>By: {{ $post->author_name }}</p>
                    <p>{{ $post->abstract }}</p>
                    <p>Posted: {{ $post->created_at }}</p>
                    <p>Status: <span style="color: purple">{{ $post->status }}</span></p>
                </div>
            </div>
        <div style="display: flex">
            <a href="post/{{ $post->file }}" target="_blank">View</a> &nbsp;
            |  &nbsp;
            @if($post->status === "Pending")
                {{-- <form action="{{ url('update_status', $post->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="status" value="Approve">
                    <input type="submit" value="Approve Journal" style="padding:10px; background-color: lightgreen">
                </form> &nbsp;
                |  &nbsp; --}}
                <form action="{{ route('update.journalStatus', $post->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="status" value="Rejected">
                    <input type="submit" value="Reject Journal" style="padding:10px; background-color: red">
                </form>
            @endif
            @if($post->status === "Approved")
            <form action="{{ route('update.journalStatus', $post->id) }}" method="POST">
                @csrf
                <input type="hidden" name="status" value="Pending">
                <input type="submit" value="Send to Pending" style="padding:10px; background-color: lightgreen">
            </form> &nbsp;
            |  &nbsp;
            <form action="{{ route('update.journalStatus', $post->id) }}" method="POST">
                @csrf
                <input type="hidden" name="status" value="Rejected">
                <input type="submit" value="Reject Journal" style="padding:10px; background-color: red">
            </form>
            @endif
            @if($post->status === "Rejected")
                {{-- <form action="{{ url('update_status', $post->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="status" value="Pending">
                    <input type="hidden" value="Send to Pending" style="padding:10px; background-color: lightgreen">
                </form> &nbsp;
                |  &nbsp; --}}
                <form action="{{ route('update.journalStatus', $post->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="status" value="Rejected">
                    <input type="hidden" value="Reject Journal" style="padding:10px; background-color: red">
                </form>
            @endif
        </div>
        @endif
    </div>
    <hr>
    <br>
@endforeach
        </div>
    </div>
</x-app-layout>
