<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    function getQuestions(){
        //return response()->json(["kcson"=>"kcson","type"=>"questions","content"=>["theme"=>0,"subtheme"=>0,"content"=>["id"=>0,"ImagePath"=>"null","Question"=>"null","answer1"=>"null","answer2"=>"null","answer3"=>"null","answer4"=>"null","answer5"=>"null","RightAnswer"=>0,"annotation"=>"null"]]]);
        $dbThemeSubtheme = DB::table('questions')->select('theme','subtheme')->groupBy('theme','subtheme')->get();
        $dbThemeSubtheme = json_decode($dbThemeSubtheme,true);
        
        for($i=0;$i<count($dbThemeSubtheme);$i++){
            $dbQuestions[$i] = ['theme'=>$dbThemeSubtheme[$i]['theme'],"subtheme"=>$dbThemeSubtheme[$i]['subtheme'], "content" =>DB::table('questions')->select('id','ImagePath','Question','answer1','answer2','answer3','answer4','answer5','RightAnswer','annotation')->where([['Theme','=',$dbThemeSubtheme[$i]['theme']],['SubTheme','=',$dbThemeSubtheme[$i]['subtheme']]])->get()];
        }
        return response()->json(["kcson"=>"kcson","type"=>"questions","content"=>$dbQuestions],200);
        //return response()->json($dbQuestions);
        
    }
    function getSubThemes(){
        return response()->json(["kcson"=>"kcson","type"=>"questions","content"=>DB::table('subtheme')->get()],200);
    }
    function getThemes(){
        return response()->json(["kcson"=>"kcson","type"=>"questions","content"=>DB::table('themes')->get()],200);
    }
    function test(Request $request){
        return response()->json(["dog"=>"poop"],200);
    }
}
