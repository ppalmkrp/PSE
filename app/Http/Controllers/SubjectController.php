<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index(){
        $subjects = Subject::all();
        return view('PSE.Subject', compact('subjects'));
    }
    public function store(Request $request)
    {
        $subject = new Subject();
        $subject->subject_name = $request->input('subject_name');
        $subject->subject_id = $request->input('subject_id');
        $subject->lecturer = $request->input('lecturer');
        $subject->group = $request->input('group');
        $request->validate([
            'subject_name' => 'required',
            'subject_id' => 'required'
        ]);


        $subject->save(); // บันทึกข้อมูล
    return redirect()->route('subjects.index')->with('success', 'รายวิชาถูกเพิ่มเรียบร้อยแล้ว');

}

public function create(){
    return view ('subjects.create');
}
}
