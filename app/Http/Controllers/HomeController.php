<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home ()
    {   
        $cervecerias = [];
        return view ("welcome", compact('cervecerias'));
        //return viwe "welcome",["cervecerias=> $cervecerias"]);
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
    
       
    
     public function newContact(Request $request)
    {//coportamiento
        $requestValidate = $request->validate([
            'name' => 'required|max:60|min:3',
            'email' => 'email:rfc,dns',
            'message' => 'required|max:350|min:3'
        ]);
        //Guardar los datos del contacto
        DB::table('contacts')->insert([
            'name' => $requestValidate['name'],
            'email' => $requestValidate['email'],
            'message' => $requestValidate['message'],
        ]);
        //enviar un correo de confirmacion
        //Mail::to ($requestValidate['email'])->send new
        //ContactRecibed($requestValidate); 
        
        return redirect()->route("contact") ->with("message","Hola $request->name hemos recibido tu mensaje, en breve te contestaremos");
    }
    public function contact()
    {
       //recuperar los contactos del dataBase
       $contacts = DB::table('contacts')->get();
        // select * from contacts:
       return view("contact",compact('contacts'));
    }

     public function whereWeAre()
    {
        return view ("where_we_are");
    }
     
}