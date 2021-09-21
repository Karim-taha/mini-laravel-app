@extends('posts.layout')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
     <h1 class="text-center text-danger mt-2">All Posts</h1>
     <div class="container">
         <a href="{{route('users.index')}}" class="btn btn-success">All users</a>
         <a href="{{route('posts.create')}}" class="btn btn-danger">Add Post</a>
         <div class="row justify-content-center">
<table class="table">
    <thead>
        <th>Title</th>
        <th>Body</th>
        <th>Author</th>
        <th>Show Post</th>
        <th>Update Post</th>
        <th>Delete Post</th>
    </thead>
    <tbody>
        @foreach ($data as $post)
        <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                {{-- <td>{{$post->user->name}}</td> --}}
                <td><a href="{{route('user.posts',$post->user->id)}}">{{$post->user->name}}</a></td>
                {{-- <td><a href="{{route('posts.show',$post->id)}}" class="btn btn-info">Show</a></td>
                <td><a href="{{route('posts.edit',$post->id)}}" class="btn btn-warning">Update</a></td>
                <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </form> --}}
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>


</body>
</html>
