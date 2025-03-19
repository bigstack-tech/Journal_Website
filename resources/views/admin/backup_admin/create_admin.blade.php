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
                <br>
                <div>
                    <form action="{{ url('add_admin') }}" method="POST">
                        @csrf
                       <div>
                            <label for="username">User Name:</label>
                            <input type="text" name="name" id="">
                       </div>
                       <div>
                            <label for="useremail">User Email:</label>
                            <input type="text" name="email" id="">
                       </div>
                       <div>
                            <label for="useremail">User Password:</label>
                            <input type="text" name="password" id="">
                       </div>
                       <div>
                            <input type="submit" value="Add New Admin" style="background-color: lightgreen; padding:10px">
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
