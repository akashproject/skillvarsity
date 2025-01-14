<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\University;
use App\Models\State;
use App\Models\City;
use App\Models\Course;

class UniversityController extends Controller
{

    public $_statusOK = 200;
    public $_statusErr = 500;

    public function index()
    {
        try {
            $universities = University::all();
            return view('administrator.universities.index',compact('universities'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function add() {
        $states = State::all();
        $courses = Course::all();
        return view('administrator.universities.add',compact('states','courses'));
    }

    public function show($id)
    {
        try {
            $university = University::find($id);
            $courses = Course::all();
            $states = State::all();
            $cities = City::where('state_id', $university->state_id)->orderBy('name', 'asc')->get();
            return view('administrator.universities.show',compact('university','states','cities','courses'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'name' => 'required',
                'slug' => 'required',
            ]);


            if($data['course_id'] <= 0){
                $course = University::create($data);
            } else {
                $course = University::findOrFail($data['course_id']);
                $course->update($data);
            }

            return redirect()->back()->with('message', 'University updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function delete($id) {
        $course = University::findOrFail($id);
        $course->delete();
        return redirect('/administrator/universities');
    }

    public function getCitiesByStateId(Request $request){
        try {
            $data = $request->all();
            $cities = City::where('state_id', $data['state_id'])->orderBy('name', 'asc')->get();
            return response()->json($cities,$this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }
}
