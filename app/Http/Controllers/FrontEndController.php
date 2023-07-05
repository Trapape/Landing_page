<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('sitio.pages.index');
    }
    public function terminos(){

        return view('sitio.pages.terminos');
    }
    public function condiciones(){

        return view('sitio.pages.condiciones');
    }
    public function soporte(){

        return view('sitio.pages.soporte');
    }

}
