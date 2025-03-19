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
<p style="color: green; text-align: center">{{ session('mssg') }}</p>
<br><br>
<div>
<table border="1" width="90%">
    <thead>
        <tr style="text-align: left;">
            <th >User id</th>
            <th >Name</th>
            <th >Email</th>
            <th >Status &nbsp; / &nbsp; Email Status</th>
            <th >Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Journal_submission as $data)
            @if($data->status === "Approved" && $data->email_status !== "Sent")
                <tr style="text-align: left; border:1px solid silver;">
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->author_name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->status }} &nbsp; / &nbsp; {{ $data->email_status }}</td>
                    <td>
                        <div style="margin-bottom: 2px; background-color:green">
                            <a href="{{ route('create-email', $data->id) }}">Send Email</a>
                        </div>
                    </td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>
</div>
</x-app-layout>
