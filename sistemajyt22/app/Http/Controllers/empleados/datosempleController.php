<?php

namespace App\Http\Controllers\empleados;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\auth;

class datosempleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('http://localhost:3000/datos_empleado');
        return view('M_empleados.datosempleados.index')->with('datosempleado', json_decode($response,true));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response4 = Http::get('http://localhost:3000/users');
        $response1 = Http::get('http://localhost:3000/rol_usuario');
        $response2 = Http::get('http://localhost:3000/departamento');
        $response3 = Http::get('http://localhost:3000/municipio');
        return view('M_empleados.datosempleados.create')
        ->with('users', json_decode($response4,true))
        ->with('codrol', json_decode($response1,true))
        ->with('departamento', json_decode($response2,true))
        ->with('municipio', json_decode($response3,true));
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
            'empleado'=>'required',
            'DNI'=>'required',
            'ROL'=>'required',
            'Telefono'=>'required',
            'Departamento'=>'required',
            'Municipio'=>'required',
            'Direccion'=>'required'
        ]);

        $response = Http::post('http://localhost:3000/datos_empleado/insertar', [
            'id' => $request->empleado,
            'dni_usuario' => $request->DNI,
            'cod_rol' => $request->ROL,
            'num_telefono' => $request->Telefono,
            'departamento_id' => $request->Departamento,
            'municipio_id' => $request->Municipio,
            'direccion' => $request->Direccion
        ]);

        $response2 = Http::get('http://localhost:3000/datos_empleado');
        return view('M_empleados.datosempleados.index')->with('datosempleado', json_decode($response2,true));
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
    public function edit($cod_dato)
    {
        $response4 = Http::get('http://localhost:3000/users');
        $response1 = Http::get('http://localhost:3000/rol_usuario');
        $response2 = Http::get('http://localhost:3000/departamento');
        $response3 = Http::get('http://localhost:3000/municipio');

        $response=Http::get('http://localhost:3000/datos_empleado/'.$cod_dato);
        $datosactu=json_decode($response->getbody()->getcontents())[0];

        $data=[];
        $data['datosactu']=$datosactu;


        return view('M_empleados.datosempleados.edit',['datosactu'=>$datosactu])
        ->with('users', json_decode($response4,true))
        ->with('codrol', json_decode($response1,true))
        ->with('departamento', json_decode($response2,true))
        ->with('municipio', json_decode($response3,true));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cod_dato)
    {
        $request->validate([
            'empleado'=>'required',
            'DNI'=>'required',
            'ROL'=>'required',
            'Telefono'=>'required',
            'Departamento'=>'required',
            'Municipio'=>'required',
            'Direccion'=>'required'
        ]);

        $response = Http::put('http://localhost:3000/datos_empleado/actualizar/' . $cod_dato, [
            'id' => $request->empleado,
            'dni_usuario' => $request->DNI,
            'cod_rol' => $request->ROL,
            'num_telefono' => $request->Telefono,
            'departamento_id' => $request->Departamento,
            'municipio_id' => $request->Municipio,
            'direccion' => $request->Direccion
        ]);

        $response2 = Http::get('http://localhost:3000/datos_empleado');
        return view('M_empleados.datosempleados.index')->with('datosempleado', json_decode($response2,true));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cod_dato)
    {
        $eliminar = Http::delete('http://localhost:3000/datos_empleado/eliminar/'.$cod_dato);
        $response = Http::get('http://localhost:3000/datos_empleado');
        return view('M_empleados.datosempleados.index')->with('datosempleado', json_decode($response,true));
    }   
}
