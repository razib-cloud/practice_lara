<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>


    @foreach ($users as $user )
    <tr>
        <th>{{$user->name}}</th>
        <th>{{$user->email}}</th>
        <th>{{$user->phone}}</th>

    </tr>

    @endforeach
</table>
