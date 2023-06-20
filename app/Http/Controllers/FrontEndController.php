<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    function index(){
        return view('sitio.pages.index');
    }
    function terminos(){

        return view('sitio.pages.terminos');
    }
    function condiciones(){

        return view('sitio.pages.condiciones');
    }
    function soporte(){

        return view('sitio.pages.soporte');
    }
}
