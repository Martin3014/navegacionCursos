<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class HomeController extends Controller
{
//asingnar un controllador a una rotas
    public function __invoke(){
        return view('home');
    }
}




