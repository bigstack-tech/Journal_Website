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
            <h1>Editorials</h1>
            <br><br>
            <hr>
            <br>
            <div>
                <br>
                <div>
                    <a href="{{ route('create.editorials') }}" style="background-color:lightgreen; padding:15px">Create new Editorial</a>
                </div>
                <br>
                <br>
                <div>
                   <h1>List of Editorials</h1>
                </div>
                <div>
                    @foreach ($data as $editorial)
                    <div style="display:flex; border: 1px solid silver; margin-bottom:10px; padding 10px">
                        <div style="flex-basis:60%">
                            <h3>Name: {{ $editorial->name }}, Email: {{ $editorial->email }}</h3>
                            <small>Institute: {{ $editorial->institute }}</small>
                        </div>
                        <div style="display:flex">
                            <a href="{{ route('remove.editorials', $editorial->id) }}" style="padding:10px; background-color: red">Remove Editorial</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
