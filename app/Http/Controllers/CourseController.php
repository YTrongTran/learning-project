<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function childCourse()
    {
        return view('pages.courses.child-english');
    }
}
