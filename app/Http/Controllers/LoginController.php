<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index(){
        //array asociativo
        $textTitles = ["Titulo" => "Login", "inputEmail" => "Email", "inputPassword" => "Password"];

        return view("login")->with("textTitles",$textTitles);
    }



}
