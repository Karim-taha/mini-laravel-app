<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students = new Student;
        $students = $students->all();
        dd($students);
        return view("students.index", ["data"=>$students]);
    }

    public function create(){
        return view("students.create");
    }

    public function store(){
        // dd($_POST);
        // dd(request());
        $students = new Student;
        $students->name = request("name");
        $students->email = request("email");
        $students->phone = request("phone");
        $students->age = request("age");
        $students->save();
        return redirect()->route('students.index');
    }

    public function show($id){
        $students = new Student;
        $students = $students->findorfail($id);
        return view("students.show", ["data"=>$students]);
    }

    public function edit($id){
        $students = new Student;
        $students = $students->findorfail($id);
        return view("students.edit", ["data"=>$students]);
    }

    public function update($id){
        $students = new Student;
        $students = $students->findorfail($id);
        // dd(request());
        $students->name = request("name");
        $students->email = request("email");
        $students->phone = request("phone");
        $students->age = request("age");
        $students->save();
        return redirect()->route('students.index');
    }

    public function destroy($id){
        $students = new Student;
        $students = $students->findorfail($id);
        $students->delete();
        return redirect()->route('students.index');
    }

}
