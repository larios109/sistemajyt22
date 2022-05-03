@extends('layouts.app')

@section('content')
@can ('crear->bitacora')
<a 
    href="{{route('bitacora.create')}}"
    class="btn btn-outline-info text-center btn-block">
    <spam>Ingresar Registro</spam> <i class="fas fa-plus-square"></i>
</a>
@endcan

<div class="table-responsive-sm mt-5">
    <table id="tablabitacora" class="table table-stripped table-bordered table-condensed table-hover">
        <thead class=thead-dark>
            <tr>
                <th class="text-center">Codigo Operacion</th>
                <th class="text-center">Usuario</th>
                <th class="text-center">Fecha Operacion</th>
                <th class="text-center">Codigo Tipo operacion</th>
                <th class="text-center">Referencia Operacion</th>
                <th class="text-center">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1; @endphp
            @foreach($registrooperacion as $registro)
                <tr>
                    <td class="text-center">{{$i}}</td>
                    <td class="text-center">{{$registro["name"]}}</td>
                    <td class="text-center">{{$registro["fecha_operacion"]}}</td>
                    <td class="text-center">{{$registro["cod_tipo_operacion"]}}</td>
                    <td class="text-center">{{$registro["referencia_operacion"]}}</td>
                    <td class="text-center">
                        @can ('editar->bitacora')
                        <form action="{{route('bitacora.destroy',$registro["cod_operacion"])}}"  method='POST' >
                            <a href="{{route('bitacora.edit',$registro["cod_operacion"])}}" class="btn btn-warning btm-sm fa fa-edit"></a>
                            @can ('borrar->bitacora')
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