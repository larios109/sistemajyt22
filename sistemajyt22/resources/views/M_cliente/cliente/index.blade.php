@extends('layouts.app')

@section('content')

@can ('crear->cliente')
<a 
    href="{{route('cliente.create')}}"
    class="btn btn-outline-info text-center btn-block">
    <spam>Crear cliente</spam> <i class="fas fa-plus-square"></i>
</a>
@endcan

<div class="table-responsive-sm mt-5">
    <table id="tablacliente" class="table table-stripped table-bordered table-condensed table-hover">
        <thead class=thead-dark>
            <tr>
                <th class="text-center">Codigo Cliente</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Apellido</th>
                <th class="text-center">Correo</th>
                <th class="text-center">DNI</th>
                <th class="text-center">Telefono</th>
                <th class="text-center">Nombre Compañia</th>
                <th class="text-center">RTN Compañia</th>
                <th class="text-center">Fecha Ingreso</th>
                <th class="text-center">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1; @endphp
            @foreach($clientes as $cliente)
                <tr>
                    <td class="text-center">{{$i}}</td>
                    <td class="text-center">{{$cliente["cliente_nombre"]}}</td>
                    <td class="text-center">{{$cliente["cliente_apellido"]}}</td>
                    <td class="text-center">{{$cliente["clinte_correo"]}}</td>
                    <td class="text-center">{{$cliente["cliente_dni"]}}</td>
                    <td class="text-center">{{$cliente["cliente_telefono"]}}</td>
                    <td class="text-center">{{$cliente["compañia_nombre"]}}</td>
                    <td class="text-center">{{$cliente["compania_rtn"]}}</td>
                    <td class="text-center">{{$cliente["cliente_fecha"]}}</td>
                    <td class="text-center">
                        @can ('editar->cliente')
                        <form action="{{route('cliente.destroy',$cliente["cod_cliente"])}}"  method='POST' >
                            <a href="{{route('cliente.edit',$cliente["cod_cliente"])}}" class="btn btn-warning btm-sm fa fa-edit"></a>
                            @can ('borrar->cliente')
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