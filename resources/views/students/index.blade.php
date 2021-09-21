@extends('students.layout')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>
<body>
     <h1 class="text-center text-danger mt-2">All Students</h1>
     <div class="container">
         <a href="{{route('students.create')}}" class="btn btn-warning">Add Student</a>
         <div class="row justify-content-center">
<table class="table">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Age</th>
        <th>Show Student</th>
        <th>Update Student</th>
        <th>Delete Student</th>
    </thead>
    <tbody>
        @foreach ($data as $student)
        <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->age}}</td>
                <td><a href="{{route('students.show',$student->id)}}" class="btn btn-info">Show</a></td>
                <td><a href="{{route('students.edit',$student->id)}}" class="btn btn-warning">Update</a></td>
                <form action="{{route('students.destroy', $student->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </form>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>


</body>
</html>
