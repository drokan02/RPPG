<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menuController extends Controller
{
   public function index(){
   		return view('layouts.menu');
   }

   public function listarAreas(){
        return view('area.listarAreas');
   }

   public function listaModalidad(){
    return view('modadelidad.listaModalidad');
   }   
   //listarturor

   public function listarTutor(){
       return view('profesionales.listarTutor');
   }
}
