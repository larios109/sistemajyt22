@extends('layouts.app')

@section('content')
<form action="{{route('bitacora.update', $actualizarbitacora->cod_operacion)}}" method='POST'>
        @csrf
        @method('PUT')
        <div class="card  mb-2">
            <div  class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Codigo Empleado</label>
                <select class="col-sm-7" class="form-control" id="Empleado" name="Empleado" value="{{$actualizarbitacora->name}}">
                    @foreach($users as $user)
                        {
                            <option id=".$user['Empleado']">{{$user["name"]}}</option>
                        }
                    @endforeach
                </select>
                @if ($errors->has('Empleado'))
                    <div     
                        id="Empleado-error"                                          
                        class="error text-danger pl-3"
                        for="Empleado"
                        style="display: block;">
                        <strong>{{$errors->first('Empleado')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="calendar" class="col-sm-2 col-form-label">Fecha de Creacion</label>
                 <div class="col-sm-7">
                    <input type="date" id="calendario" name="calendario" class="form-control" value="{{$actualizarbitacora->fecha_operacion}}">
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

            <div  class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Codigo Operacion</label>
                <select class="col-sm-7" class="form-control" id="Operacion" name="Operacion" value="{{$actualizarbitacora->cod_tipo_operacion}}">
                    @foreach($tipoperacion as $tipo)
                        {
                            <option id=".$tipo['Operacion']">{{$tipo["cod_tipo_operacion"]}}.{{$tipo["nombre_operacion"]}}</option>
                        }
                    @endforeach
                </select>
                @if ($errors->has('Operacion'))
                    <div     
                        id="Operacion-error"                                          
                        class="error text-danger pl-3"
                        for="Operacion"
                        style="display: block;">
                        <strong>{{$errors->first('Operacion')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Referencia Operacion</label>
                 <div class="col-sm-7">
                    <input type="text" id="Referencia" name="Referencia" class="form-control" placeholder="Ingrese la referencia de la operacion" value="{{$actualizarbitacora->referencia_operacion}}">
                </div>
                @if ($errors->has('Referencia'))
                    <div                 
                        id="Referencia-error"                             
                        class="error text-danger pl-3"
                        for="Referencia"
                        style="display: block;">
                        <strong>{{$errors->first('Referencia')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row">
                <div class="col-sm-6 col-xs-12 mb-2">
                    <a href="{{route('bitacora.index')}}"
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
@endsection