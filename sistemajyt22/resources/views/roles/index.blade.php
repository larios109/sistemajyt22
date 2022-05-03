@extends('layouts.app')

@section('content')

@can ('crear->rol')
<a 
    href="{{route('roles.create')}}"
    class="btn btn-outline-info text-center btn-block">
    <spam>Crear rol</spam> <i class="fas fa-plus-square"></i>
</a>
@endcan

<div class="table-responsive-sm mt-5">
    <table id="tablaroels" class="table table-stripped table-bordered table-condensed table-hover">
        <thead class=thead-dark>
            <tr>
                <th class="text-center">Rol</th>
                <th class="text-center">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
                <tr>
                    <td class="text-center">{{$role["name"]}}</td>
                    <td class="text-center">
                        @can ('borrar->rol')
                        <button type="submit" class="btn btn-danger btm-sm fa fa-times-circle">   
                            @csrf
                            @method('DELETE')
                        </button>
                        @endcan
                 </td> 
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection