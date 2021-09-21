<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Resources\Student as StudentResource;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];

        return response()->json($response, 200);
    }



    public function index()
    {
        // $students = new Student;
        // $students = $students->all();
        // dd($students);
        // return view("students.index", ["data"=>$students]);

        $students = Student::all();
        return $this->sendResponse(StudentResource::collection($students),'students retrieved successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view("students.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name'=>'required|string|min :3',
        //     'email'=>'required|email',
        //     'phone'=>'required|numeric|starts_with:010,011,012,015',
        //     'age'=>'required|numeric',
        // ]);

        // return $request;
        // Student::create($request->all());  // save to database. Go to model and write the $fillable
        // return redirect()->route('students.index');

        $input = $request->all();
        $students = Student::create($input);
        return $this->sendResponse(new StudentResource($students), 'student created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        // return view("students.show", ["data"=>$student]);
        $students = Student::find($student);
        // dd($students);
        return $this->sendResponse(new StudentResource($students), 'student retrieved successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        // return view("students.edit", ["data"=>$student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // $request->validate([
        //     'name'=>'required|string|min :3',
        //     'email'=>'required|email',
        //     'phone'=>'required|numeric|starts_with:010,011,012,015',
        //     'age'=>'required|numeric',
        // ]);

        // dump($request);
        // dump($student);
        // $student->update($request->all());  // save to database. Go to model and write the $fillable
        // return view("students.show",["data"=>$student]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        // $student->delete();
        // return redirect()->route('students.index');
    }
}
