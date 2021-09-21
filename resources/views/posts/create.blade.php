@extends('students.layout')

<div class="container">
    <a href="{{route('posts.index')}}" class="btn btn-danger mt-2">All Posts</a>
    <div class="row justify-content-center">
        <h1 class="text-center text-danger">Add Post</h1>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Add Post</div>
                <div class="card-body">
                    @if($errors->all())
                    <div class="alert alert-danger">
                    <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                    </ul>
                    </div>
                    @endif
                    <br>

                    <form action="{{route('posts.store')}}" method="post">
                        @csrf
                        <div class="form-group mb-1">
                            <label for="title" class="label">Title</label>
                            <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}">
                            {{-- <label class="text-danger">{{$errors->first("name")}}</label> --}}
                        </div>
                        <div class="form-group mb-1">
                            <label for="body" class="label">Body</label>
                            <input type="text" name="body" class="form-control" id="body" value="{{old('body')}}">
                            {{-- <label class="text-danger">{{$errors->first("email")}}</label> --}}
                        </div>
                        <input type="submit" class="btn btn-success" value="Add">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
