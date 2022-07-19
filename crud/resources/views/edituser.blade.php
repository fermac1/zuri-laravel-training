<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="{{ asset('/css/crud.css') }}">
</head>
<body>
    <div class="container">
        <h2>Edit user</h2>

@if ($errors->any())
    <b class="error">there were some problems with your input</b>
    <ul>
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ $user->id }}" method="post">
   @csrf

   <input type="text" name="name" placeholder="Name" value="{{ $user->name }}"><br>
        <input type="email" name="email" placeholder="Email" value="{{ $user->email }}"><br>
        <input type="number" name="phone" placeholder="Phone number" value="{{ $user->phone }}"><br>
   <input class="btn" type="submit" value="submit">
</form>
    </div>
</body>
</html>