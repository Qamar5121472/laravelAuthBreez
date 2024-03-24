<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    public function index()
    {
        $timetable = [
            'Monday' => ['09:00' => 'Lesson 1', '10:00' => 'Lesson 2'],
            'Tuesday' => ['09:00' => 'Lesson 1', '10:00' => 'Lesson 2'],
            // Add more days and lessons as needed
        ];
        return view('student.timetable', ['timetable' => $timetable]);
    }
}
