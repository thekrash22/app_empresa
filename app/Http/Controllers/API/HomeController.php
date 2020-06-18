<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data;
use DB;

class HomeController extends Controller
{
    public function consultar_cedula(Request $request){
        if($request->documento){
            $data = Data::where('cedula','like', $request->documento)
                    ->select('nombre','cedula','origen','destino','empresa')
                    ->first();
            if($data){
                return response()->json([$data],200);
            }
            else{
                return response()->json([
                    'mensaje' => 'El documento '. $request->documento .' no esta autorizado',
                ], 401 );
            }
        }else{
            return response()->json([
                'mensaje' => 'Parametros invalidos',
            ], 400 );
        }
    }
    public function consultar_nit(Request $request){
        if($request->nit){
            $data = Data::where('nit','like', $request->nit)
                ->select('destino','empresa')
                ->first();
            if($data){
                return response()->json([$data],200);
            }
            else{
                return response()->json([
                    'mensaje' => 'El documento '. $request->documento .' no esta autorizado',
                ], 401 );
            }
        }else{
            return response()->json([
                'mensaje' => 'Parametros invalidos',
            ], 400 );
        }
    }
}
