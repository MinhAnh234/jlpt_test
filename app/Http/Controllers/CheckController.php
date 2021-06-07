<?php

namespace App\Http\Controllers;
use App\question;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function index( Request $Request) {
        $questions=question::all();
        return view("welcome")->with("questions",$questions);
    }
    public function check( Request $Request) {

        $score=0;
        $correctAns=question::select('correctAns')->get();
        for( $i=1;$i<=(int)($Request->id);$i++){
            $m="question".$i;
            if($Request->$m){
                    if($Request->$m==$correctAns[$i-1]->correctAns){
                        $score+=1;
                    }
            }
        }
        return ($score);
    }
}
