<?php

namespace App\Http\Controllers;

use App\Models\ProjectsModel;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    function ProjectPage(){
        $ProjectData=json_decode(ProjectsModel::orderBy('id','desc')->get());
        return view('Projects',['ProjectData'=>$ProjectData]);
    }
}
