<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BreweryController extends Controller
{
     public function cervecerias ()
    {  
      $cervecerias=[     
                [
                    "nombre"=>"Old Town",
                    "desc"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, aspernatur dolorem distinctio ad ipsa quos pariatur porro exercitationem quidem dolorum cupiditate totam ipsum illo fuga asperiores cumque vel numquam amet?",
                    "aforo"=>20
                    ],
                    [
                    "nombre"=>"Irish Drunks",
                    "desc"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, aspernatur dolorem distinctio ad ipsa quos pariatur porro exercitationem quidem dolorum cupiditate totam ipsum illo fuga asperiores cumque vel numquam amet?",
                    "aforo"=>43
                    ],
                    [
                    "nombre"=>"Joyce",
                    "desc"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, aspernatur dolorem distinctio ad ipsa quos pariatur porro exercitationem quidem dolorum cupiditate totam ipsum illo fuga asperiores cumque vel numquam amet?",
                    "aforo"=>17
                    ],
                    [
                    "nombre"=>"Piccolo Bar",
                    "desc"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, aspernatur dolorem distinctio ad ipsa quos pariatur porro exercitationem quidem dolorum cupiditate totam ipsum illo fuga asperiores cumque vel numquam amet?",
                    "aforo"=>26
                    ]
    ];
   return view("cervecerias",["breweries"=>$cervecerias]);
  }
       

}
   



 /* $brewery = [
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
         return view ("about_us",["team"=>$breweries]);   
          */
        