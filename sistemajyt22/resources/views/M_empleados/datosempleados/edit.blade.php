@extends('adminlte::page')

@section('title', '| Actualizar Datos empleado')

@section('content_header')
    <h1 class="text-center">Datos Empleado</h1>
    <hr class="bg-dark border-1 border-top border-dark">
@stop

@section('content')
    <form action="{{route('datos.update',$datosactu->cod_dato)}}" method='POST'>
        @csrf
        @method('PUT')
        <div class="card  mb-2">
            <div  class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Codigo Empleado</label>
                <select class="col-sm-7" class="form-control" id="empleado" name="empleado" value="{{$datosactu->id}}">
                    @foreach($users as $user)
                        {
                            <option id=".$user['empleado']">{{$user["id"]}}.{{$user["name"]}}</option>
                        }
                    @endforeach
                </select>
                @if ($errors->has('empleado'))
                    <div     
                        id="empleado-error"                                          
                        class="error text-danger pl-3"
                        for="empleado"
                        style="display: block;">
                        <strong>{{$errors->first('empleado')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">DNI</label>
                 <div class="col-sm-7">
                    <input type="number"  id="DNI" name="DNI"  class="form-control" placeholder="Ingrese el dni" value="{{$datosactu->dni_usuario}}">
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
                <select class="col-sm-7" class="form-control" id="ROL" name="ROL" value="{{$datosactu->cod_rol}}">
                    @foreach($codrol as $rol)
                        {
                            <option id=".$rol['ROL']">{{$rol["cod_rol"]}}.{{$rol["tipo_rol"]}}</option>
                        }
                    @endforeach
                </select>
                @if ($errors->has('ROL'))
                    <div     
                        id="ROL-error"                                          
                        class="error text-danger pl-3"
                        for="ROL"
                        style="display: block;">
                        <strong>{{$errors->first('ROL')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Numero Telefono</label>
                 <div class="col-sm-7">
                    <input type="number" id="Telefono" name="Telefono" min="2" max="10000000"  class="form-control" placeholder="Ingrese el numero de telefono" value="{{$datosactu->num_telefono}}">
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

            <div  class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Departamento ID</label>
                <select class="col-sm-7" class="form-control" id="Departamento" name="Departamento"  value="{{$datosactu->departamento_id}}">
                    @foreach($departamento as $depa)
                        {
                            <option id=".$depa['Departamento']">{{$depa["departamento_id"]}}.{{$depa["departamento_nom"]}}</option>
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
                <select class="col-sm-7" class="form-control" id="Municipio" name="Municipio" value="{{$datosactu->municipio_id}}">
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
                    <input type="text" id="Direccion" name="Direccion" class="form-control" placeholder="Ingrese la direccion" value="{{$datosactu->direccion}}">
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
                    <a href="{{route('datos.index')}}"
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