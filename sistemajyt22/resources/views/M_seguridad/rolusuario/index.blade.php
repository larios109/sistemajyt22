@extends('layouts.app')

@section('content')
@can ('crear->rol')
<a 
    href="{{route('rolusuarios.create')}}"
    class="btn btn-outline-info text-center btn-block">
    <spam>Crear Rol Usuario</spam> <i class="fas fa-plus-square"></i>
</a>
@endcan

<div class="table-responsive-sm mt-5">
    <table id="rolusuario" class="table table-stripped table-bordered table-condensed table-hover">
        <thead class=thead-dark>
            <tr>
                <th class="text-center">Codigo Rol</th>
                <th class="text-center">Tipo Rol</th>
                <th class="text-center">Opciones</th>
            </tr>
        </thead>
        <tbody>
        @php $i=1; @endphp
            @foreach($rolusuario as $rol)
                <tr>
                    <td class="text-center">{{$i}}</td>
                    <td class="text-center">{{$rol["tipo_rol"]}}</td>
                    <td class="text-center">
                        <form action="{{route('rolusuarios.destroy',$rol["cod_rol"])}}" method="POST">
                            <a href="{{route('rolusuarios.edit',$rol["cod_rol"])}}" class="btn btn-warning btm-sm fa fa-edit"></a>
                            <button type="submit"
                            class="btn btn-danger btm-sm fa fa-times-circle">
                            @csrf
                            @method('DELETE')
                            </button>
                        </form>
                </td>
                </tr>
            @php $i++; @endphp
            @endforeach
        </tbody>
    </table>
</div>
@endsection