<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
    <link rel="stylesheet" href="{{ asset('/css/crud.css') }}">
</head>
<body>
<div class="container">
    <h2>Create User</h2>
    <form action="createForm" method="post">
        @csrf
        
        <input type="text" name="name" placeholder="Name"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="number" name="phone" placeholder="Phone number"><br>
        <input class="btn" type="submit" value="Submit">
    </form>
</div>
</body>
</html>