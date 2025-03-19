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
<h1>Send Email Notification</h1>
<br><br>
<div style="margin-bottom: 2px">
    <form action="{{ route('send.approvedjournal.email',$data->id) }}" method="post">
        @csrf
        <div>
            <input type="hidden" name="email_status" id="Approved" value="Sent" required>
        </div>
        <div>
            <label for="username">Name </label>
            <input type="text" name="greeting" id="" value="Greetings {{ $data->author_name }}" required>
            <br>
            <span style="color: red">@error('greeting'){{ $message }} @enderror </span>
       </div>
       <br>
       <div>
            <label for="username">Body</label>
            <textarea name="body" id="" cols="30" rows="10" required>
Hurray! your journal has been approved
            </textarea>
            <br>
            <span style="color: red">@error('body'){{ $message }} @enderror </span>
       </div>
       <br>
       <div>
            <label for="username">Action text</label>
            <input type="text" name="actiontext" id="" value="Click the button" required>
            <br>
            <span style="color: red">@error('actiontext'){{ $message }} @enderror </span>
       </div>
       <br>
       <div>
            <label for="username">Action url</label>
            <input type="text" name="actionurl" id="" value="www.approve.com" required>
            <br>
            <span style="color: red">@error('actionurl'){{ $message }} @enderror </span>
       </div>
       <br>
       <div>
            <label for="username">End text</label>
            <input type="text" name="endtext" id="" value="thanks you" required>
            <br>
            <span style="color: red">@error('endtext'){{ $message }} @enderror </span>
       </div>
       <br>
       <div>
            <input type="submit"value="Send Email" style="background-color: green; padding:10px; width:100%">
       </div>

    </form>
    {{-- <a href="{{ url('send_mailto', $data->id) }}">Send Email</a> --}}
</div>
</x-app-layout>
