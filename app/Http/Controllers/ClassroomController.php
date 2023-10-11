<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;

class ClassroomController extends Controller
{
    public function home()
    {
        $subjects = Subject::all();
        return view('PSE.Home', compact('subjects'));
    }
}
