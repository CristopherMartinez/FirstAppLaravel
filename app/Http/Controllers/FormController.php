<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use DB;

class FormController extends Controller
{

    //Show the first page
    public function index(){
        $textTitles = ["Bienvenido!!","CRUD con LARAVEL,PHP y Bootstrap"];
        return view("pagina1")->with("textTitles",$textTitles);
    }

    //Insert into the DB 
    public function create(Request $request){

            //Validate the inputs
            $validatedData = Validator::make($request->all(), [
                'txtName' => 'required',
                'txtLastname' => 'required',
                'txtAge' => 'required',
            ],$messages = [
                'txtName.required' => 'Ingresa tú nombre(s)',
                'txtLastname.required' => 'Ingresa tú apellido',
                'txtAge.required' => 'Ingresa tú edad',
            ])->validate();

       
            return redirect('/pagina2');



            // $sql = DB::insert("INSERT into students(name,lastname,age)values(?,?,?)", [
            //     $request->txtName,
            //     $request->txtLastname,
            //     $request->txtAge
            // ]);
    
            // if($sql == true){
            //     echo"ALUMNO REGISTRADO CORRECTAMENTE";
            //     return back()->with("Agregado","Alumno registrado correctamente!!");
            // }else{
            //     echo"ERROR!!";
            //     return back()->with("Incorrecto","Hubo un error!!");
            // } 
    }
    
    
}
