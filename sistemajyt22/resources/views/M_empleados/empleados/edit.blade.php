@extends('adminlte::page')

@section('title', '| Actualizar empleado')

@section('content_header')
    <h1 class="text-center">Empleado</h1>
    <hr class="bg-dark border-1 border-top border-dark">
@stop

@section('content')
    <form action="{{route('empleados.update',$empleadoactu->cod_usuario)}}" method='POST'>
        @csrf
        @method('PUT')
        <div class="card  mb-2">

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">DNI empleado</label>
                 <div class="col-sm-7">
                    <input type="number" id="DNI" name="DNI" min="13" max="13" class="form-control" placeholder="Ingrese el dni"  value="{{$empleadoactu->dni_usuario}}">
                </div>
                @if ($errors->has('DNI'))
                    <div               
                        id="DNI-error"                               
                        class="error text-danger pl-3"
                        for="DNI"
                        style="display: block;">
                        <strong>{{$errors->first('DNI')}}</strong>
                    </div>
                @endif
            </div>

            <div  class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Codigo Rol</label>
                <select class="col-sm-7" class="form-control" id="Rol" name="Rol" value="{{$empleadoactu->cod_rol}}">
                    @foreach($codrol as $rol)
                        {
                            <option id=".$rol['Rol']">{{$rol["cod_rol"]}}.{{$rol["tipo_rol"]}}</option>
                        }
                    @endforeach
                </select>
                @if ($errors->has('Rol'))
                    <div     
                        id="Rol-error"                                          
                        class="error text-danger pl-3"
                        for="Rol"
                        style="display: block;">
                        <strong>{{$errors->first('Rol')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Contrase??a</label>
                 <div class="col-sm-7">
                    <input type="password" id="Cotnrase??a" name="Cotnrase??a"  class="form-control" placeholder="Ingrese la Cotnrase??a" value="{{$empleadoactu->contrasena}}">
                </div>
                @if ($errors->has('Cotnrase??a'))
                    <div
                        id="Cotnrase??a-error"                                                
                        class="error text-danger pl-3"
                        for="Cotnrase??a"
                        style="display: block;">
                        <strong>{{$errors->first('Cotnrase??a')}}</strong>
                    </div>
                 @endif
            </div>

            <div class="row mb-3">
                <label for="calendar" class="col-sm-2 col-form-label">Fecha de Ingreso</label>
                 <div class="col-sm-7">
                    <input type="date" id="calendario" name="calendario" class="form-control" value="{{$empleadoactu->fecha}}">
                </div>
                @if ($errors->has('calendario'))
                    <div     
                        id="calendario-error"                                          
                        class="calendario text-danger pl-3"
                        for="calendario"
                        style="display: block;">
                        <strong>{{$errors->first('calendario')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Nombre</label>
                 <div class="col-sm-7">
                    <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="Ingrese el Nombre" value="{{$empleadoactu->nombre}}">
                </div>
                @if ($errors->has('Nombre'))
                    <div                 
                        id="Nombre-error"                             
                        class="error text-danger pl-3"
                        for="Nombre"
                        style="display: block;">
                        <strong>{{$errors->first('Nombre')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Apellido</label>
                 <div class="col-sm-7">
                    <input type="text" id="Apellido" name="Apellido" class="form-control" placeholder="Ingrese el Apellido" value="{{$empleadoactu->apellido}}">
                </div>
                @if ($errors->has('Apellido'))
                    <div                 
                        id="Apellido-error"                             
                        class="error text-danger pl-3"
                        for="Apellido"
                        style="display: block;">
                        <strong>{{$errors->first('Apellido')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Telefono</label>
                 <div class="col-sm-7">
                    <input type="number" id="Telefono" name="Telefono" min="10" max="10"  class="form-control" placeholder="Ingrese el Telefono" value="{{$empleadoactu->num_telefono}}">
                </div>
                @if ($errors->has('Telefono'))
                    <div          
                        id="Telefono-error"                                     
                        class="error text-danger pl-3"
                        for="Telefono"
                        style="display: block;">
                        <strong>{{$errors->first('Telefono')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Correo</label>
                 <div class="col-sm-7">
                    <input type="email" id="Correo" name="Correo" class="form-control" placeholder="Ingrese el correo" value="{{$empleadoactu->correo_electronico}}">
                </div>
                @if ($errors->has('cantidad'))
                    <div               
                        id="Correo-error"                               
                        class="error text-danger pl-3"
                        for="Correo"
                        style="display: block;">
                        <strong>{{$errors->first('Correo')}}</strong>
                    </div>
                @endif
            </div>

            <div  class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Departamento ID</label>
                <select class="col-sm-7" class="form-control" id="Departamento" name="Departamento" value="{{$empleadoactu->departamento}}">
                    @foreach($departamento as $depa)
                        {
                            <option id=".$depa['Departamento']">{{$depa["departamento_id"]}}</option>
                        }
                    @endforeach
                </select>
                @if ($errors->has('Departamento'))
                    <div     
                        id="Departamento-error"                                          
                        class="error text-danger pl-3"
                        for="Departamento"
                        style="display: block;">
                        <strong>{{$errors->first('Departamento')}}</strong>
                    </div>
                @endif
            </div>

            <div  class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Municipio ID</label>
                <select class="col-sm-7" class="form-control" id="Municipio" name="Municipio" value="{{$empleadoactu->municipio}}">
                    @foreach($municipio as $muni)
                        {
                            <option id=".$muni['Municipio']">{{$muni["municipio_id"]}}/{{$muni["departamento_id"]}}/{{$muni["municipio_nombre"]}}</option>
                        }
                    @endforeach
                </select>
                @if ($errors->has('Municipio'))
                    <div     
                        id="Municipio-error"                                          
                        class="error text-danger pl-3"
                        for="Municipio"
                        style="display: block;">
                        <strong>{{$errors->first('Municipio')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Direccion</label>
                 <div class="col-sm-7">
                    <input type="text" id="Direccion" name="Direccion"  class="form-control" placeholder="Ingrese la direccion" value="{{$empleadoactu->direccion}}">
                </div>
                @if ($errors->has('Direccion'))
                    <div
                        id="Direccion-error"                                                
                        class="error text-danger pl-3"
                        for="Direccion"
                        style="display: block;">
                        <strong>{{$errors->first('Direccion')}}</strong>
                    </div>
                 @endif
            </div>

            <div class="row">
                <div class="col-sm-6 col-xs-12 mb-2">
                    <a href="{{route('empleados.index')}}"
                    class="btn btn-danger w-100"
                    >Cancelar <i class="fa fa-times-circle ml-2"></i></a>
                </div>
                <div class="col-sm-6 col-xs-12 mb-2">
                    <button 
                        type="submit"
                        class="btn btn-success w-100">
                        Actualizar <i class="fa fa-check-circle ml-2"></i>
                    </button>
                </div>
            </div>
        </div>
     </form>
@stop

@section('css')
@stop

@section('js')
@stop