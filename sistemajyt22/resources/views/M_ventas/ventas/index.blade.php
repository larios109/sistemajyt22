@extends('layouts.app')

@section('content')
@can ('crear->venta')
<a 
    href="{{route('ventas.create')}}"
    class="btn btn-outline-info text-center btn-block">
    <spam>Crear Venta</spam> <i class="fas fa-plus-square"></i>
</a>
@endcan

<div class="table-responsive-sm mt-5">
    <table id="venta" class="table table-stripped table-bordered table-condensed table-hover">
        <thead class=thead-dark>
            <tr>
                <th class="text-center">Codigo Venta</th>
                <th class="text-center">Nombre Empleado</th>
                <th class="text-center">Nombre Cliente</th>
                <th class="text-center">Fecha de Creacion</th>
                <th class="text-center">Opciones</th>
            </tr>
        </thead>
        <tbody>
        @php $i=1; @endphp
            @foreach($ventas as $venta)
                <tr>
                    <td class="text-center">{{$i}}</td>
                    <td class="text-center">{{$venta["name"]}}</td>
                    <td class="text-center">{{$venta["cliente_nombre"]}}</td>
                    <td class="text-center">{{$venta["fecha_creacion"]}}</td>
                    <td class="text-center">
                        @can ('editar->venta')
                        <form action="{{route('ventas.destroy',$venta["cod_venta"])}}" method="POST">
                            <a href="{{route('ventas.edit',$venta["cod_venta"])}}" class="btn btn-warning btm-sm fa fa-edit"></a>
                            @can ('borrar->venta')
                            <button type="submit"
                            class="btn btn-danger btm-sm fa fa-times-circle">
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