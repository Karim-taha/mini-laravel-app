@extends('users.layout')

<h1 class="text-center">Posts by <span class="text-danger">{{$user->name}}</span></h1>

<div class="container">
<a class="btn btn-success" href="{{route('posts.index')}}">All Posts</a>
<table class="table">
    <thead>
        <th>Title</th>
        <th>Body</th>
    </thead>
    <tbody>
        @foreach ($data as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>



