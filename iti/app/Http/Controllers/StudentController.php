<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
        public function index(){
            $student = new Student;
            $student = $student->all();
            // dump($student);
            return view("students.index", ["data"=> $student]);
        }

        public function create(){
            return view("students.create");
        }
        public function store(){
            // dd($_POST);
            // dd(request());
            $student = new Student;
            $student->name = request("name");
            $student->email = request("email");
            $student->phone = request("phone");
            $student->age = request("age");
            $student->save();
            return redirect()->route('students.index');
        }

        public function show($id){
            $student = new Student;
            // $student = $student->find($id);
            // dump(request());
            $student = $student->findorfail($id);
            // dd($student);
            return view("students.show", ["data"=> $student]);
        }

        public function edit($id){
            $student = new Student;
            $student = $student->findorfail($id);
            return view("students.edit", ["data"=> $student]);
        }

        public function update($id){
            $student = new Student;
            $student = $student->findorfail($id);
            // dd(request());
            $student->name = request("name");
            $student->email = request("email");
            $student->phone = request("phone");
            $student->age = request("age");
            $student->save();
            return view("students.show", ["data"=> $student]);
        }

        public function destroy($id){
            $student = new Student;
            $student = $student->findorfail($id);
            $student->delete();
            return redirect()->route('students.index');
        }
        

}
