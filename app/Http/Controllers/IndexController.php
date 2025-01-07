<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(Request $request)
    {
        try {
            return view("index");
        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
        }
    }
}
