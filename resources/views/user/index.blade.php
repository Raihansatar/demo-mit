<h3>
    User List
</h3>

<table>
    <thead>
        <tr>
            <th>NAME</th>
            <th>STAFF ID</th>
            <th>CREATED AT</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->staff_id }}</td>
                <td>{{ $user->created_at->format('Y-m-d') }}</td>
                <td>
                    <a href="{{route('user.edit', ['user' => $user->id])}}">Edit</a>

                    <form method="POST" action="{{route('user.delete')}}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('user.create') }}">Create User</a>
