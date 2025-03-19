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
            <h1 style="text-align: center">Grant Admin Privilleges</h1>
            <br>
            <hr>
            <div>
                <br>
                <div>
                    <a href="/create_admin" style="background-color:lightgreen; padding:15px">Create new Admin</a>
                </div>
                <br>
                <br>
                <div>
                  <div>
                    <h1><u>List of Admins</u></h1>
                  </div>
                  <br><br>
                  <div>
                    @foreach ($data as $admin)
                        <div style="display: flex; width:100%; padding:10px; border:1px solid silver">
                            <div style="flex-basis: 70%">
                                <h3>Name: {{ $admin->name }}</h3>
                                <small>Email: {{ $admin->email }}</small>
                            </div>
                            <div>
                                <a href="{{ url('remove_admin', $admin->id) }}" style="padding:10px; background-color: red">Remove Admin</a>
                            </div>
                        </div>
                        <br>
                    @endforeach
                  </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
