@extends('layouts.app')

@section('content')
<form action="{{route('rolusuarios.update' , $actualizarrol->cod_rol)}}" method='POST'>
        @csrf
        @method('PUT')
        <div class="card  mb-2">

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Tipo Rol</label>
                 <div class="col-sm-7">
                    <input type="text" id="Rol" name="Rol" class="form-control" placeholder="Ingrese el tipo de rol"  value="{{$actualizarrol->tipo_rol}}">
                </div>
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

            <div class="row">
                <div class="col-sm-6 col-xs-12 mb-2">
                    <a href="{{route('rolusuarios.index')}}"
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