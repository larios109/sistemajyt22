@extends('layouts.app')

@section('content')
<form action="{{route('pagosalario.store')}}" method='POST'>
        @csrf
        <div class="card  mb-2">
            <div  class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Codigo Empleado</label>
                <select class="col-sm-7" class="form-control" id="Empleado" name="Empleado">
                    <option selected>Escoja un empleado</option>
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
                <label for="colFormLabel" class="col-sm-2 col-form-label">Sueldo Bruto</label>
                 <div class="col-sm-7">
                    <input type="number" id="SueldoB" name="SueldoB" min="0" max="60000" class="form-control" placeholder="Ingrese el sueldo bruto">
                </div>
                @if ($errors->has('SueldoB'))
                    <div               
                        id="SueldoB-error"                               
                        class="error text-danger pl-3"
                        for="SueldoB"
                        style="display: block;">
                        <strong>{{$errors->first('SueldoB')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">IHSS</label>
                 <div class="col-sm-7">
                    <input type="number" id="IHSS" name="IHSS" min="0" max="5000" class="form-control" placeholder="Ingrese el IHSS">
                </div>
                @if ($errors->has('IHSS'))
                    <div                 
                        id="IHSS-error"                             
                        class="error text-danger pl-3"
                        for="IHSS"
                        style="display: block;">
                        <strong>{{$errors->first('IHSS')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">RAP</label>
                 <div class="col-sm-7">
                    <input type="number" id="RAP" name="RAP" min="0" max="5000" class="form-control" placeholder="Ingrese el RAP">
                </div>
                @if ($errors->has('RAP'))
                    <div          
                        id="RAP-error"                                     
                        class="error text-danger pl-3"
                        for="RAP"
                        style="display: block;">
                        <strong>{{$errors->first('RAP')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Otras deducciones</label>
                 <div class="col-sm-7">
                    <input type="number" id="deducciones" name="deducciones" min="0" max="50000" class="form-control" placeholder="Ingrese otras deducciones">
                </div>
                @if ($errors->has('deducciones'))
                    <div
                        id="deducciones-error"                                                
                        class="error text-danger pl-3"
                        for="deducciones"
                        style="display: block;">
                        <strong>{{$errors->first('deducciones')}}</strong>
                    </div>
                 @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">vacaciones</label>
                 <div class="col-sm-7">
                    <input type="number" id="vacaciones" name="vacaciones" min="0" max="5000" class="form-control" placeholder="Ingrese las vacaciones">
                </div>
                @if ($errors->has('vacaciones'))
                    <div
                        id="vacaciones-error"                                              
                        class="error text-danger pl-3"
                        for="vacaciones"
                        style="display: block;">
                        <strong>{{$errors->first('vacaciones')}}</strong>
                     </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Descripcion vacaciones</label>
                 <div class="col-sm-7">
                    <input type="text" id="Descripcion" name="Descripcion" class="form-control" placeholder="Ingrese la Descripcion de vacaciones">
                </div>
                @if ($errors->has('Descripcion'))
                    <div
                        id="Descripcion-error"                                              
                        class="error text-danger pl-3"
                        for="Descripcion"
                        style="display: block;">
                        <strong>{{$errors->first('Descripcion')}}</strong>
                     </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Sueldo</label>
                 <div class="col-sm-7">
                    <input type="number" id="Sueldo" name="Sueldo" class="form-control" min="0" max="60000" placeholder="Ingrese el Sueldo">
                </div>
                @if ($errors->has('Sueldo'))
                    <div
                        id="Sueldo-error"                                              
                        class="error text-danger pl-3"
                        for="Sueldo"
                        style="display: block;">
                        <strong>{{$errors->first('Sueldo')}}</strong>
                     </div>
                @endif
            </div>

            <div class="row">
                <div class="col-sm-6 col-xs-12 mb-2">
                    <a href="{{route('pagosalario.index')}}"
                    class="btn btn-danger w-100"
                    >Cancelar <i class="fa fa-times-circle ml-2"></i></a>
                </div>
                <div class="col-sm-6 col-xs-12 mb-2">
                    <button 
                        type="submit"
                        class="btn btn-success w-100">
                        Guardar <i class="fa fa-check-circle ml-2"></i>
                    </button>
                </div>
            </div>
        </div>
     </form>
@endsection