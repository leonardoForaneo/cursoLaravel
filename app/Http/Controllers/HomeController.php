<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Aquí se escribiran una serie de metodos de administrar rutas
    //Utilizamos invoke porque el controlador solo administra una sola ruta
    public function __invoke()
    {
        return  view('home');
    }
}
