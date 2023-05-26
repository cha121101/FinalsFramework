<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('store.user')}}" method="post" >
        @csrf
        <p class="" >Student name</p><input type="text" name="fullname" class="inline">
        <p class="" >Year and section</p><input type="text" name="yearandsection" class="inline">
        <p class="" >Age</p><input type="text" name="age" class="inline">
        <button type="submit"> Create User</button>
    </form>
</body>
</html>