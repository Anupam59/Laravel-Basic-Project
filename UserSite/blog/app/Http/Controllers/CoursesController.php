<?php

namespace App\Http\Controllers;
use App\Models\CourseModel;
use Illuminate\Http\Request;

class CoursesController extends Controller
{

    function CoursePage(){
        $CoursesData= json_decode(CourseModel::orderBy('id','desc')->get());
        return view('Course',['CoursesData'=>$CoursesData]);
    }
}
