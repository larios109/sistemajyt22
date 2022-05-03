@extends('layouts.app')

@section('content')
@can ('crear->oficina')
<a 
    href="{{route('oficina.create')}}"
    class="btn btn-outline-info text-center btn-block">
    <spam>Crear oficina</spam> <i class="fas fa-plus-square"></i>
</a>
@endcan

<div class="table-responsive-sm mt-5">
    <table id="tablaoficina" class="table table-stripped table-bordered table-condensed table-hover">
        <thead class=thead-dark>
            <tr>
                <th class="text-center">Oficina ID</th>
                <th class="text-center">Compañia RTN</th>
                <th class="text-center">Nombre oficina</th>
                <th class="text-center">Direccion Oficina</th>
                <th class="text-center">Departamento ID</th>
                <th class="text-center">Municipio ID</th>
                <th class="text-center">Telefono 1</th>
                <th class="text-center">Telefono 2</th>
                <th class="text-center">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1; @endphp
            @foreach($oficinas as $ofic)
                <tr>
                    <td class="text-center">{{$i}}</td>
                    <td class="text-center">{{$ofic["compania_rtn"]}}</td>
                    <td class="text-center">{{$ofic["oficina_nombre"]}}</td>
                    <td class="text-center">{{$ofic["oficina_direccion"]}}</td>
                    <td class="text-center">{{$ofic["departamento_id"]}}</td>
                    <td class="text-center">{{$ofic["municipio_id"]}}</td>
                    <td class="text-center">{{$ofic["oficina_telefono_1"]}}</td>
                    <td class="text-center">{{$ofic["oficina_telefono_2"]}}</td>
                    <td class="text-center">
                        @can ('editar->oficina')
                        <form action="{{route('oficina.destroy',$ofic["cod_oficina"])}}"  method='POST' >
                            <a href="{{route('oficina.edit',$ofic["cod_oficina"])}}" class="btn btn-warning btm-sm fa fa-edit"></a>
                            @can ('borrar->oficina')
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