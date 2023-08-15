<?php

namespace App\Http\Controllers;

use App\Models\GC203T05;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    public function index($id_documento)
    {

        // dd($id_documento);
        return view('components.search', ['id_documento' => $id_documento]);
    }
    public function buscar(Request $request)
    {
        $query = $request->input('query');
        $result = GC203T05::where('CLAVE_CATA', "$query")->first();

        if ($result) {
            return response()->json(['encontrado' => true]);
        } else {
            return response()->json(['encontrado' => false]);
        }
    }
}
