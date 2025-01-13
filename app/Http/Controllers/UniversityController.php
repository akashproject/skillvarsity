<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;

class UniversityController extends Controller
{
    //
    public function view($slug)
    {
        try {
            
            $contentMain = University::where('slug', $slug)->first();
            $universityName = $contentMain->name;
            return view('university.view',compact('contentMain','universityName'));
        } catch(\Illuminate\Database\QueryException $e){
            
        }
    }
}
