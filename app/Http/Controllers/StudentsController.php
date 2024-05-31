<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentsController extends Controller
{
    public function index(){
        $students = DB::select("SELECT * FROM students");
        return view("pagina2")->with("alumnos",$students);
    }

    // public function showStudent(){
    //     $student = DB::select
    // }
}
