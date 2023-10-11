<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class ClassroomController extends Controller
{
    public function home()
    {
        $std = Student::all();
        return view('PSE.Home', compact('std'));
    }

    public function index()
    {
        $students = Student::all(); // ดึงข้อมูลนักเรียนทั้งหมด
        return view('PSE.addStudent', compact('students'));
    }

    public function create()
    {
        return view('PSE.addStudent');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'student_id' => 'required',
        ]);

        $student = new Student;
        $student->name = $request->name;
        $student->student_id = $request->student_id;
        $student->save();

        return redirect('/students');
    }
}
