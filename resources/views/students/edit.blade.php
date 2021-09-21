@extends('students.layout')

<div class="container">
    <a href="{{route('students.index')}}" class="btn btn-danger mt-2">All Students</a>
    <div class="row justify-content-center">
        <h1 class="text-center text-danger">Edit Student</h1>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Edit Student</div>
                <div class="card-body">
                    <form action="{{route('students.update', $data->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-1">
                            <label for="name" class="label">Name</label>
                            <input type="text" name="name" class="form-control" value="{{$data->name}}" id="name">
                        </div>
                        <div class="form-group mb-1">
                            <label for="email" class="label">Email</label>
                            <input type="text" name="email" class="form-control" value="{{$data->email}}" id="email">
                        </div>
                        <div class="form-group mb-1">
                            <label for="phone" class="label">Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{$data->phone}}" id="phone">
                        </div>
                        <div class="form-group mb-3">
                            <label for="age" class="label">Age</label>
                            <input type="text" name="age" class="form-control" value="{{$data->age}}" id="age">
                        </div>
                        <input type="submit" class="btn btn-success" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
