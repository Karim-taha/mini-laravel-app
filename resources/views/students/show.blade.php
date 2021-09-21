@extends('students.layout')

<div class="container">
<h1 class=" text-center text-danger">Student</h1>
<div class="card uper">
    <div class="card-header">
        View Student
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p><strong>Name : </strong><span>{{$data->name}}</span></p>
                    <hr>
                    <p><strong>Email : </strong><span>{{$data->email}}</span></p>
                    <hr>
                    <p><strong>Phone : </strong><span>{{$data->phone}}</span></p>
                    <hr>
                    <p><strong>Age : </strong><span>{{$data->age}}</span></p>
                    <hr>
                    <p><strong>Created at : </strong><span>{{$data->created_at}}</span></p>
                    <p><strong>Updated at : </strong><span>{{$data->updated_at}}</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="{{route('students.index')}}" class="btn btn-dark mt-2 d-flex justify-content-center">Show all Students</a>
</div>


