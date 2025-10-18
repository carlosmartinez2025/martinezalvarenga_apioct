<?php

namespace App\Http\Controllers;

use App\Models\Zona;
use Illuminate\Http\Request;

class ZonaController extends Controller
{
    public function obtenerZonas()
    {
        $zonas = Zona::all(); 
        $respuesta = [
            "success" => true,
            "msg" => "Valores devueltos por el EndPoint",
            "data" => $zonas,
            "error" => "",
            "total" => sizeof($zonas)
        ];
        return response()->json($respuesta, 200); 
    }

    public function obtenerZona($idzona)
    {
        $zona = Zona::where('id_zona', $idzona)->get(); 
        $respuesta = [
            "success" => true,
            "msg" => "Valores devueltos por el EndPoint",
            "data" => $zona,
            "error" => "",
            "total" => sizeof($zona)
        ];
        return response()->json($respuesta, 200);
    }
}