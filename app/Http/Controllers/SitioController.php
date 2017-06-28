<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sitio;

class SitioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        abort(423,"Opcion no habilitada");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        abort(423,"Opcion no habilitada");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Registro de sitios
        try {
            $sitio = new Sitio();
            $sitio->nombre = $request->nombre;
            $sitio->descripcion = $request->descripcion;
            $sitio->latitud = $request->latitud;
            $sitio->longitud = $request->longitud;
            
            
            
            if($this->validate($request, [
                "nombre" => array("required","max:190"),
                "descripcion" => "max:5000",
                "latitud" => "max:190",
                "longitud" => "max:190"
            ])){
                return response()->json("Validacion no valida",401);
            }
            
            if($sitio->save()){
                return response()->json($sitio);
            }else{
                abort(501,"No se pudo registrar");
            }
        } catch (Exception $ex) {
            //Probar esta excepcion
            abort(500,$ex);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        abort(423,"Opcion no habilitada");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        abort(423,"Opcion no habilitada");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        abort(423,"Opcion no habilitada");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        abort(423,"Opcion no habilitada");
    }
}
