<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Subject;

class SubjectController extends Controller
{
    //
    public function view($slug)
    {
        try {
            $contentMain = Subject::where('slug', $slug)->first();
            $courses = Course::where('status', "1")->get();
            return view('subjects.view',compact('contentMain','courses'));
        } catch(\Illuminate\Database\QueryException $e){
            
        }
    }
}
