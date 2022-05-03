@extends('layouts.app')

@section('content')
<form action="{{route('oficina.store')}}" method='POST'>
        @csrf
        <div class="card  mb-2">
            <div  class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Compañia RTN</label>
                <select class="col-sm-7" class="form-control" id="RTN" name="RTN">
                    <option selected>Escoja el rtn de la compañia</option>
                    @foreach($companias as $compania)
                        {
                            <option id=".$compania['RTN']">{{$compania["compania_rtn"]}}</option>
                        }
                    @endforeach
                </select>
                @if ($errors->has('RTN'))
                    <div     
                        id="RTN-error"                                          
                        class="error text-danger pl-3"
                        for="RTN"
                        style="display: block;">
                        <strong>{{$errors->first('RTN')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Nombre Oficina</label>
                 <div class="col-sm-7">
                    <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="Ingrese el Nombre">
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
                <label for="colFormLabel" class="col-sm-2 col-form-label">Direccion Oficina</label>
                 <div class="col-sm-7">
                    <input type="text" id="Direccion" name="Direccion" class="form-control" placeholder="Ingrese la direccion">
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

            <div  class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Departamento ID</label>
                <select class="col-sm-7" class="form-control" id="Departamento" name="Departamento">
                    <option selected>Escoja un codigo de un Departamento</option>
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
                <select class="col-sm-7" class="form-control" id="Municipio" name="Municipio">
                    <option selected>Escoja un codigo de un Municipio</option>
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
                <label for="colFormLabel" class="col-sm-2 col-form-label">Telefono 1</label>
                 <div class="col-sm-7">
                    <input type="number"  id="Telefono1" name="Telefono1"  class="form-control" placeholder="Ingrese el Telefono">
                </div>
                @if ($errors->has('Telefono1'))
                    <div          
                        id="Telefono1-error"                                     
                        class="error text-danger pl-3"
                        for="Telefono1"
                        style="display: block;">
                        <strong>{{$errors->first('Telefono1')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Telefono 2</label>
                 <div class="col-sm-7">
                    <input type="number" id="Telefono2" name="Telefono2" class="form-control" placeholder="Ingrese el Telefono">
                </div>
                @if ($errors->has('Telefono2'))
                    <div
                        id="Telefono2-error"                                                
                        class="error text-danger pl-3"
                        for="Telefono2"
                        style="display: block;">
                        <strong>{{$errors->first('Telefono2')}}</strong>
                    </div>
                 @endif
            </div>

            <div class="row">
                <div class="col-sm-6 col-xs-12 mb-2">
                    <a href="{{route('oficina.index')}}"
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