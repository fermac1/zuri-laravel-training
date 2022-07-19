<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <link rel="stylesheet" href="{{ asset('/css/crud.css') }}">
</head>
<body>

 <div class="container">
    <h2>User Management System</h2>

    <div class="btn create">
        <a href="create">create new product</a>
    </div>

    @if ($message = Session::get('success'))
        <p class="message">{{ $message }}</p>
    @endif

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>action</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>
                    <form action="{{ $user->id }}/delete" method="post">
                    @csrf
                    <button class="btn edit">
                        <a href="{{$user->id}}"> Edit</a>
                    </button>

                    <button class="btn" type="submit">Delete</button>
                    </form>
                </td>
            </tr>

        @endforeach
    </table>
 </div>
</body>
</html>