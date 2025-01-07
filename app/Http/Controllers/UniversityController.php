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
            return view('university.view',compact('contentMain'));
        } catch(\Illuminate\Database\QueryException $e){
            
        }
    }
}
