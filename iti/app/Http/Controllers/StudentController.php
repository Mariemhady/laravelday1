<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
        public function index(){
            $student = new Student;
            $student = $student->all();
            dump($student);
            return view("students.index", ["data"=> $student]);
        }

}
