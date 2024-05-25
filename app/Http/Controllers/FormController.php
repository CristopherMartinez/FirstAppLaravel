<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FormController extends Controller
{

    //Show the first page
    public function index(){
        $title = "Bienvenido!!";
        return view("pagina1",["title" => $title]);
    }

    //Insert into the DB 
    public function create(Request $request){

      
            $sql = DB::insert("INSERT into students(name,lastname,age)values(?,?,?)", [
                $request->txtName,
                $request->txtLastname,
                $request->txtAge
            ]);
    
            if($sql == true){
                echo"ALUMNO REGISTRADO CORRECTAMENTE";
                return back()->with("Alumno registrado correctamente!!");
            }else{
                echo"ERROR!!";
                return back()->with("Hubo un error!!");
            }
      
       
    }
    
    
}
