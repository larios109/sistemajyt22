@extends('layouts.app')

@section('content')
@can ('crear->usuarios')
<a 
    href="{{route('usuarios.create')}}"
    class="btn btn-outline-info text-center btn-block">
    <spam>Crear empleado</spam> <i class="fas fa-plus-square"></i>
</a>
@endcan

<div class="table-responsive-sm mt-5">
    <table id="tablaempleado" class="table table-stripped table-bordered table-condensed table-hover">
        <thead class=thead-dark>
            <tr>
                <th class="text-center">Codigo Usuario</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Correo</th>
                <th class="text-center">Rol</th>
                <th class="text-center">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1; @endphp
            @foreach($usuarios as $usuario)
                <tr>
                    <td class="text-center">{{$i}}</td>
                    <td class="text-center">{{$usuario["name"]}}</td>
                    <td class="text-center">{{$usuario["email"]}}</td>
                    <td class="text-center">
                        @if(!empty($usuario->getRoleNames()))
                            @foreach($usuario->getRoleNames() as $rolName)
                                <h5><span class="badge badge-dark">{{$rolName}}</span></h5>
                            @endforeach
                        @endif
                    </td>
                    <td class="text-center">
                        @can ('editar->usuarios')
                        <form action="{{route('usuarios.destroy',$usuario->id)}}"  method='POST' >
                            <a href="{{route('usuarios.edit',$usuario->id)}}" class="btn btn-warning btm-sm fa fa-edit"></a>
                            @can ('borrar->usuarios')
                            <button type="submit" class="btn btn-danger btm-sm fa fa-times-circle">   
                                @csrf
                                @method('DELETE')
                            </button>
                            @endcan
                        </form>
                        @endcan
                    </td>
                </tr>
            @php $i++; @endphp
            @endforeach
        </tbody>
    </table>
</div>
@endsection