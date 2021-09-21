@extends('users.layout')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
     <h1 class="text-center text-danger mt-2">All Users</h1>
     <div class="container">
        <a href="{{route('posts.index')}}" class="btn btn-warning">All Posts</a>
         <div class="row justify-content-center">
<table class="table">
    <thead>
        <th>UserName</th>
        <th>Email</th>
        <th>Show Posts</th>
    </thead>
    <tbody>
        @foreach ($data as $user)
        <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><a class="btn btn-success" href="{{route('user.posts',$user->id)}}">Show Posts</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</body>
</html>
