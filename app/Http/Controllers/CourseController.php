<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //
    
    public function view($slug)
    {
        try {
            
            $contentMain = Course::where('slug', $slug)->first();
            return view('course.view',compact('contentMain'));
        } catch(\Illuminate\Database\QueryException $e){
            
        }
    }
}
