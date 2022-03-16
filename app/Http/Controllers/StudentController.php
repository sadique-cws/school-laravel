<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   
    public function index()
    {
        return view("home",["students"=>Student::all()]);
    }

    
    public function create()
    {
        return view("insert");
    }

  
    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'city' => 'required',
            'state' => 'required',
        ]);
       Student::create($data);

        return redirect()->route("student.index");
    }

   
    public function show(Student $student)
    {
        return view("view",['student'=> $student]);
    }

   
    public function edit(Student $student)
    {
        return view("edit",["student"=>$student]);
    }

    public function update(Request $request, Student $student)
    {
        $std = $student;
        $std->name = $request->name;
        $std->contact = $request->contact;
        $std->email = $request->email;
        $std->city = $request->city;
        $std->state = $request->state;
        $std->save();

        return redirect()->route("student.index");
    }

   
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index');
    }
}
