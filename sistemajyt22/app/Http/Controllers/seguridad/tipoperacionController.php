<?php

namespace App\Http\Controllers\seguridad;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\auth;
use App\Models\tipoperacion;

class tipoperacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:ver->tipoperacion|crear->tipoperacion|editar->tipoperacion|borrar->tipoperacion',['only'=>['index']]);
        $this->middleware('permission:crear->tipoperacion',['only'=>['create','store']]);
        $this->middleware('permission:editar->tipoperacion',['only'=>['edit','update']]);
        $this->middleware('permission:borrar->tipoperacion',['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('http://localhost:3000/tipo_operacion');
        return view('M_seguridad.tipoperacion.index')->with('tipoperacion', json_decode($response,true));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('M_seguridad.tipoperacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nombre'=>'required'
        ]);

        $response = Http::post('http://localhost:3000/tipo_operacion/insertar', [
            'nombre_operacion' => $request->Nombre
        ]);

        $response2 = Http::get('http://localhost:3000/tipo_operacion');
        return view('M_seguridad.tipoperacion.index')->with('tipoperacion', json_decode($response2,true));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $cod_detalle_venta
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_tipo_operacion)
    {
        $response=Http::get('http://localhost:3000/tipo_operacion/'.$cod_tipo_operacion);
        $actualizartipoperacion=json_decode($response->getbody()->getcontents())[0];

        $data=[];
        $data['actualizartipoperacion']=$actualizartipoperacion;

        return view('M_seguridad.tipoperacion.edit',['actualizartipoperacion'=>$actualizartipoperacion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cod_tipo_operacion)
    {
        $request->validate([
            'Nombre'=>'required'
        ]);

        $response = Http::put('http://localhost:3000/tipo_operacion/actualizar/' . $cod_tipo_operacion, [
            'nombre_operacion' => $request->Nombre
        ]);

        $response2 = Http::get('http://localhost:3000/tipo_operacion');
        return view('M_seguridad.tipoperacion.index')->with('tipoperacion', json_decode($response2,true));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cod_tipo_operacion)
    {
        $eliminar = Http::delete('http://localhost:3000/tipo_operacion/eliminar/'.$cod_tipo_operacion);
        $response2 = Http::get('http://localhost:3000/tipo_operacion');
        return view('M_seguridad.tipoperacion.index')->with('tipoperacion', json_decode($response2,true));
    }   
}
