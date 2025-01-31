<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;
use App\Models\Course;

class UniversityController extends Controller
{
    //
    public function view($slug)
    {
        try {
            $contentMain = University::where('slug', $slug)->first();
            $universityName = $contentMain->name;
            $courses = json_decode($contentMain->courses);
            $universityCourses = Course::whereIn('id',$courses)->get();
            return view('university.view',compact('contentMain','universityName','universityCourses'));
        } catch(\Illuminate\Database\QueryException $e){
            
        }
    }
}
