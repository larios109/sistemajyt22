@extends('layouts.app')

@section('content')
@can ('crear->direccioncliente')
<a 
    href="{{route('direccioncliente.create')}}"
    class="btn btn-outline-info text-center btn-block">
    <spam>Crear Direccion Cliente</spam> <i class="fas fa-plus-square"></i>
</a>
@endcan

<div class="table-responsive-sm mt-5">
    <table id="tabladireccioncliente" class="table table-stripped table-bordered table-condensed table-hover">
        <thead class=thead-dark>
            <tr>
                <th class="text-center">Codigo Direccion</th>
                <th class="text-center">Cliente Nombre</th>
                <th class="text-center">Direccion</th>
                <th class="text-center">Ciudad</th>
                <th class="text-center">Departameno ID</th>
                <th class="text-center">Municipio ID</th>
                <th class="text-center">Direccion Telefono</th>
                <th class="text-center">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1; @endphp
            @foreach($direccioncliente as $direccion)
                <tr>
                    <td class="text-center">{{$i}}</td>
                    <td class="text-center">{{$direccion["cliente_nombre"]}}</td>
                    <td class="text-center">{{$direccion["direccion"]}}</td>
                    <td class="text-center">{{$direccion["ciudad"]}}</td>
                    <td class="text-center">{{$direccion["departamento_id"]}}</td>
                    <td class="text-center">{{$direccion["municipio_id"]}}</td>
                    <td class="text-center">{{$direccion["direccion_telefono"]}}</td>
                    <td class="text-center">
                        @can ('editar->direccioncliente')
                        <form action="{{route('direccioncliente.destroy',$direccion["cod_direccion"])}}"  method='POST' >
                            <a href="{{route('direccioncliente.edit',$direccion["cod_direccion"])}}" class="btn btn-warning btm-sm fa fa-edit"></a>
                            @can ('borrar->direccioncliente')
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