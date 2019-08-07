<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    //
    public function Index(){
        return view('index');
    }

    
    public function GetData(Request $request){
         $froms = [
            "dollar",
            "peso"
        ];
        $from = $request->input('from');
        $to = $request->input('to');
        $valueFrom = $request->input('valueFrom');
        $valueTo = 11;
        if($from == $to) return "Changes values";
    
        return $this->Convertidor($froms[$from],$froms[$to],$valueFrom);


    }

    public function Convertidor($from,$to,$value){
        $send = null;
        if($to == "dollar") $send = $value / 51.06;
        else $send = $value * 51.06;

        $this->Insert($from, $to,$value,$send);

         return redirect()->route('response', [
         'valueFrom'=>$value,
            'valueTo' =>$send,
               ]);
    }


    public function Insert($from,$to,$valueFrom,$valueTo){
       return DB::table('actions')->insert(
            [
             'from' => $from ,
             'to' => $to,
             'valueFrom'=>$valueFrom,
             'valueTo'=>$valueTo
             ]
        );
    }
}
