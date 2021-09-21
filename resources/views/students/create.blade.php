@extends('students.layout')

<div class="container">
    <a href="{{route('students.index')}}" class="btn btn-danger mt-2">All Students</a>
    <div class="row justify-content-center">
        <h1 class="text-center text-danger">Add Student</h1>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Add Student</div>
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

                    <form action="{{route('students.store')}}" method="post">
                        @csrf
                        <div class="form-group mb-1">
                            <label for="name" class="label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
                            {{-- <label class="text-danger">{{$errors->first("name")}}</label> --}}
                        </div>
                        <div class="form-group mb-1">
                            <label for="email" class="label">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="{{old('email')}}">
                            {{-- <label class="text-danger">{{$errors->first("email")}}</label> --}}
                        </div>
                        <div class="form-group mb-1">
                            <label for="phone" class="label">Phone</label>
                            <input type="text" name="phone" class="form-control" id="phone"  value="{{old('phone')}}">
                            {{-- <label class="text-danger">{{$errors->first("phone")}}</label> --}}
                        </div>
                        <div class="form-group mb-3">
                            <label for="age" class="label">Age</label>
                            <input type="text" name="age" class="form-control" id="age"  value="{{old('age')}}">
                            {{-- <label class="text-danger">{{$errors->first("age")}}</label> --}}
                        </div>
                        <input type="submit" class="btn btn-success" value="Add">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
