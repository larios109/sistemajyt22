@extends('layouts.app')

@section('content')
@can ('crear->detalleventa')
<a 
    href="{{route('detalleventas.create')}}"
    class="btn btn-outline-info text-center btn-block">
    <spam>Crear Detalle de venta</spam> <i class="fas fa-plus-square"></i>
</a>
@endcan

<div class="table-responsive-sm mt-5">
    <table id="tabladetalleventa" class="table table-stripped table-bordered table-condensed table-hover">
        <thead class=thead-dark>
            <tr>
                <th class="text-center">Codigo Detalle venta</th>
                <th class="text-center">Codigo venta</th>
                <th class="text-center">Nombre Producto</th>
                <th class="text-center">Cantidad</th>
                <th class="text-center">Precio Venta</th>
                <th class="text-center">Descuento</th>
                <th class="text-center">ISV</th>
                <th class="text-center">Total</th>
                <th class="text-center">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1; @endphp
            @foreach($detalleventas as $detalle)
                <tr>
                    <td class="text-center">{{$i}}</td>
                    <td class="text-center">{{$detalle["cod_venta"]}}</td>
                    <td class="text-center">{{$detalle["nombre_producto"]}}</td>
                    <td class="text-center">{{$detalle["cantidad"]}}</td>
                    <td class="text-center">{{$detalle["precio_venta"]}}</td>
                    <td class="text-center">{{$detalle["descuento"]}}</td>
                    <td class="text-center">{{$detalle["impuesto_sobre_venta"]}}</td>
                    <td class="text-center">{{$detalle["subtotal"]}}</td>
                    <td class="text-center">
                        @can ('editar->detalleventa')
                        <form action="{{route('detalleventas.destroy',$detalle["cod_detalle_venta"])}}"  method='POST' >
                            <a href="{{route('detalleventas.edit',$detalle["cod_detalle_venta"])}}" class="btn btn-warning btm-sm fa fa-edit"></a>
                            @can ('borrar->detalleventa')
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