@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('user.store') }}">

    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">

    <br>
    <label for="staff_id">Staff ID:</label>
    <input type="text" id="staff_id" name="staff_id">

    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">

    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">

    <br>
    <button type="submit">Submit</button>

</form>
