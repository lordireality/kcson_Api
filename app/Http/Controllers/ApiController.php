<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    function getQuestions(Request $request){
        return response()->json(["dog"=>"poop"],200);
    }
}
