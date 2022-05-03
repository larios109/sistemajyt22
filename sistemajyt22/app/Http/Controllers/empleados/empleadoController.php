<?php

namespace App\Http\Controllers\empleados;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\auth;

class empleadoController extends Controller
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
        $response = Http::get('http://localhost:3000/users');
        return view('M_empleados.empleados.index')->with('users', json_decode($response,true));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $response1 = Http::get('http://localhost:3000/rol_usuario');
        // $response2 = Http::get('http://localhost:3000/departamento');
        // $response3 = Http::get('http://localhost:3000/municipio');
        // return view('M_empleados.empleados.create')
        // ->with('codrol', json_decode($response1,true))
        // ->with('departamento', json_decode($response2,true))
        // ->with('municipio', json_decode($response3,true));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'DNI'=>'required',
        //     'Rol'=>'required',
        //     'Cotnraseña'=>'required',
        //     'calendario'=>'required',
        //     'Nombre'=>'required',
        //     'Apellido'=>'required',
        //     'Telefono'=>'required',
        //     'Correo'=>'required',
        //     'Departamento'=>'required',
        //     'Municipio'=>'required',
        //     'Direccion'=>'required'
        // ]);

        // $response = Http::post('http://localhost:3000/empleados/insertar', [
        //     'dni_usuario' => $request->DNI,
        //     'cod_rol' => $request->Rol,
        //     'contrasena' => $request->Cotnraseña,
        //     'fecha' => $request->calendario,
        //     'nombre' => $request->Nombre,
        //     'apellido' => $request->Apellido,
        //     'num_telefono' => $request->Telefono,
        //     'correo_electronico' => $request->Correo,
        //     'departamento' => $request->Departamento,
        //     'municipio' => $request->Municipio,
        //     'direccion' => $request->Direccion
        // ]);

        // $response2 = Http::get('http://localhost:3000/empleados');
        // return view('M_empleados.empleados.index')->with('empleados', json_decode($response2,true));
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
    public function edit($cod_usuario)
    {
        // $response1 = Http::get('http://localhost:3000/rol_usuario');
        // $response2 = Http::get('http://localhost:3000/departamento');
        // $response3 = Http::get('http://localhost:3000/municipio');

        // $response=Http::get('http://localhost:3000/empleados/'.$cod_usuario);
        // $empleadoactu=json_decode($response->getbody()->getcontents())[0];

        // $data=[];
        // $data['empleadoactu']=$empleadoactu;


        // return view('M_empleados.empleados.edit',['empleadoactu'=>$empleadoactu])
        // ->with('codrol', json_decode($response1,true))
        // ->with('departamento', json_decode($response2,true))
        // ->with('municipio', json_decode($response3,true));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cod_usuario)
    {
        // $request->validate([
        //     'DNI'=>'required',
        //     'Rol'=>'required',
        //     'Cotnraseña'=>'required',
        //     'calendario'=>'required',
        //     'Nombre'=>'required',
        //     'Apellido'=>'required',
        //     'Telefono'=>'required',
        //     'Correo'=>'required',
        //     'Departamento'=>'required',
        //     'Municipio'=>'required',
        //     'Direccion'=>'required'
        // ]);

        // $response = Http::put('http://localhost:3000/empleados/actualizar/' . $cod_usuario, [
        //     'dni_usuario' => $request->DNI,
        //     'cod_rol' => $request->Rol,
        //     'contrasena' => $request->Cotnraseña,
        //     'fecha' => $request->calendario,
        //     'nombre' => $request->Nombre,
        //     'apellido' => $request->Apellido,
        //     'num_telefono' => $request->Telefono,
        //     'correo_electronico' => $request->Correo,
        //     'departamento' => $request->Departamento,
        //     'municipio' => $request->Municipio,
        //     'direccion' => $request->Direccion
        // ]);

        // $response = Http::get('http://localhost:3000/empleados');
        // return view('M_empleados.empleados.index')->with('empleados', json_decode($response,true));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cod_usuario)
    {
        $eliminar = Http::delete('http://localhost:3000/users/eliminar/'.$cod_usuario);
        $response = Http::get('http://localhost:3000/users');
        return view('M_empleados.empleados.index')->with('users', json_decode($response,true));
    }   
}
