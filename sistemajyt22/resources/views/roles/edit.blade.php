@extends('layouts.app')

@section('content')
<form action="{{route('roles.update',$role->id)}}" method='POST'>
        @csrf
        @method('PUT')
        <div class="card  mb-2">

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Nombre del rol</label>
                 <div class="col-sm-7">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Ingrese el Nombre">
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
                <label for="colFormLabel" class="col-sm-2 col-form-label">Permisos para el rol: </label>
                 <div class="col-sm-7">
                    <br/>
                    @foreach($permission as $value)
                        <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                        {{$value->name}}</label>
                    <br/>
                    @endforeach
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-xs-12 mb-2">
                    <a href="{{route('roles.index')}}"
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
        {!!Form::close()!!}
        </div>
     </form>
@endsection