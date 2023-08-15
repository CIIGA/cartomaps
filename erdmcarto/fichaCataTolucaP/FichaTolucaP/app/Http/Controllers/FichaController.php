<?php

namespace App\Http\Controllers;

use App\Models\callesSeccionadas;
use App\Models\GC203T04;
use App\Models\GC203T05;
use App\Models\GC203T06;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FichaController extends Controller
{
    public function index(Request $request)
    {

        $datos = GC203T05::join('GC203T04', 'GC203T05.CLAVE_CATA', '=', 'GC203T04.CLAVE_CATA')
            ->join('cat_regimen', 'GC203T04.REGPROP', '=', 'cat_regimen.regimen')
            ->join('cat_uso', 'GC203T05.DESTINO', '=', 'cat_uso.uso')
            ->select([
                'GC203T05.CLAVE_CATA', 'GC203T04.DOMICILIO', 'GC203T04.NUMEXT', 'GC203T05.NUMINTP', 'GC203T04.CODPOST',
                'GC203T04.COLONIA', 'cat_regimen.descripcion as REGPROP', 'cat_uso.descripcion as USO',
                'GC203T05.PMNPROP', 'GC203T05.RFC', 'GC203T05.CURP', 'GC203T05.CLAVE_CATA'
            ])
            ->where('GC203T05.CLAVE_CATA', $request->cuenta)->get();
            //obtenemos los datos de la tabla callesseccionadas$
        $seccionadas = callesSeccionadas::select([
            'Calle','direccion3'
        ])
        ->where('ClaveCatastral',$request->cuenta)
        ->first();
        $tabla = GC203T04::select([
            'SUPTERRTOT', 'FRENTE', 'NFRENTE', 'FONDO', 'NFFONDO', 'UBICACION',
            'NFUBIC', 'NFTOPOGR', 'NFIRREG', 'NFAREA', 'NFSUPAPR'
        ])
            ->where('GC203T04.CLAVE_CATA', $request->cuenta)->get();
        //guardaremos 
        $valoresca=DB::select('select concat(GC203T06.USO,GC203T06.CLASECONST,GC203T06.CATEGCONST) AS TIPOLOGIA,
        GC203T06.SUPCONS,
        GC203T06.NIVCONS,
        GC203T06.ANIODECONS,
        GC203T06.ESTADOCONS,
        GC203T06.FACTORNIV,
        GC203T06.VALORCONS,
        cat_ocupaciones.DESCRCLCAT
        from cat_ocupaciones,GC203T06 where cat_ocupaciones.USO = GC203T06.USO and cat_ocupaciones.CLASECONST = GC203T06.CLASECONST and 
        cat_ocupaciones.CATEGCONST = GC203T06.CATEGCONST and GC203T06.CLAVE_CATA=?', [$request->cuenta]);

       
        //CONSTRUCCION TOTAL
        $construccion_t = GC203T06::select([
            DB::raw("sum(SUPCONS) AS CT"),
            DB::raw("sum(VALORCONS) AS VCT")
        ])
            ->where('CLAVE_CATA', $request->cuenta)->first();
        //VALOR TERRENO ACTUAL
        $valor_ta = GC203T05::select([
            'VTERRPROP'
        ])
            ->where('CLAVE_CATA', $request->cuenta)->first();
        //VALOR CATASTRAL ACTUAL
        $valor_ca = $valor_ta->VTERRPROP + $construccion_t->VCT;
        $i = 0;
        $FA = $tabla[0]->NFRENTE * $tabla[0]->NFFONDO * $tabla[0]->NFUBIC * $tabla[0]->NFTOPOGR * $tabla[0]->NFIRREG * $tabla[0]->NFAREA * $tabla[0]->NFSUPAPR;
        return view('components.formCataToluca', ['seccionadas'=>$seccionadas,'datos' => $datos, 'tabla' => $tabla, 'FA' => $FA, 'valoresca' => $valoresca, 'i' => $i, 'construccion_t' => $construccion_t, 'valor_ta' => $valor_ta, 'valor_ca' => $valor_ca, 'id_documento' => $request->id_documento, 'id_usuario' => $request->id_usuario]);
    }
}
