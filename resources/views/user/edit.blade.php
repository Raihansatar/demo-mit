@if ($errors->any())
    <ul style="color: red">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('user.update', ['user'=> $user->id]) }}">

    @csrf
    <label for="name">Name:</label>
    <input type="text" value="{{ $user->name }}" id="name" name="name">

    <br>
    <label for="staff_id">Staff ID:</label>
    <input type="text" value="{{ $user->staff_id }}" id="staff_id" name="staff_id">

    <br>
    <label for="email">Email:</label>
    <input type="email" value="{{ $user->email }}" id="email" name="email">

    <br>
    <button type="submit">Update</button>

</form>
