@extends('layouts.app')

@section('content')
@can ('crear->tipoperacion')
<a 
    href="{{route('tipoperacion.create')}}"
    class="btn btn-outline-info text-center btn-block">
    <spam>Crear tipo operacion</spam> <i class="fas fa-plus-square"></i>
</a>
@endcan

<div class="table-responsive-sm mt-5">
    <table id="tipooperacion" class="table table-stripped table-bordered table-condensed table-hover">
        <thead class=thead-dark>
            <tr>
                <th class="text-center">Codigo Tipo operacion</th>
                <th class="text-center">Nombre Operacion</th>
                <th class="text-center">Opciones</th>
            </tr>
        </thead>
        <tbody>
        @php $i=1; @endphp
            @foreach($tipoperacion as $tipo)
                <tr>
                    <td class="text-center">{{$i}}</td>
                    <td class="text-center">{{$tipo["nombre_operacion"]}}</td>
                    <td class="text-center">
                        @can ('editar->tipoperacion')
                        <form action="{{route('tipoperacion.destroy',$tipo["cod_tipo_operacion"])}}" method="POST">
                            <a href="{{route('tipoperacion.edit',$tipo["cod_tipo_operacion"])}}" class="btn btn-warning btm-sm fa fa-edit"></a>
                            @can ('borrar->tipoperacion')
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