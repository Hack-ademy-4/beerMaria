<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home ()
    {
        return view ("welcome");
    }
     public function aboutUs(){
         //el data base nos devuelve una lista de personas que forman el equipo
         $persons = [
            [
                "name"=>"Nico",
                "lastname"=>"Milella",
                "age"=>33,
            ],
            [
               "name"=>"Maria",
               "lastname"=>"Ibañez",
               "age"=>37,
   
            ],

            ];
         return view ("about_us",["team"=>$persons]);   
         
     }
    
       
    
     public function contact()
    {
        return view ("contact");
    }
     public function whereWeAre()
    {
        return view ("where_we_are");
    }
     
}