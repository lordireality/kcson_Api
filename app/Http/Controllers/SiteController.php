<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Route;

class SiteController extends Controller
{
    function LoadIndex(){
        $params = ["param" => "param-paramlaifhaki"];
        $requestQuestions = Request::create('/api/getQuestions', 'GET', $params);
        $jsonQuestions = app()->handle($requestQuestions)->getContent();

        $requestThemes = Request::create('/api/getThemes', 'GET', $params);
        $jsonTheme = app()->handle($requestThemes)->getContent();

        $requestSubTheme = Request::create('api/getSubthemes', 'GET', $params);
        $jsonSubTheme = app()->handle($requestSubTheme)->getContent();
        return view('index')->with("jsonTheme",$jsonTheme)->with("jsonSubTheme",$jsonSubTheme)->with("jsonQuestions", $jsonQuestions);
    }
}
