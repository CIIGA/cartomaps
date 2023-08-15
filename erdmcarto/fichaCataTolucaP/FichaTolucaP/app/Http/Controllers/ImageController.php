<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(Request $request)
    {
       
        header('Location: ../../../CargaFotosCatTolucaP/cargaFotosTolucaPCuenta.php');
        die();
        
    }
}
