@extends('layouts.app')

@section('content')
@can ('crear->compania')
<a 
    href="{{route('compania.create')}}"
    class="btn btn-outline-info text-center btn-block">
    <spam>Crear Compañia</spam> <i class="fas fa-plus-square"></i>
</a>
@endcan 

<div class="table-responsive-sm mt-5">
    <table id="tablacomapnia" class="table table-stripped table-bordered table-condensed table-hover">
        <thead class=thead-dark>
            <tr>
                <th class="text-center">Compania RTN</th>
                <th class="text-center">Compañia CAI</th>
                <th class="text-center">Nombre legal</th>
                <th class="text-center">Nombre Comercial</th>
                <th class="text-center">Pagina Web</th>
                <th class="text-center">Correo</th>
                <th class="text-center">Facebook</th>
                <th class="text-center">Instagram</th>
                <th class="text-center">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($companias as $comp)
                <tr>
                    <td class="text-center">{{$comp["compania_rtn"]}}</td>
                    <td class="text-center">{{$comp["compañia_cai"]}}</td>
                    <td class="text-center">{{$comp["compañia_legal_nom"]}}</td>
                    <td class="text-center">{{$comp["compañia_comercial_nom"]}}</td>
                    <td class="text-center">{{$comp["compañia_paginaweb"]}}</td>
                    <td class="text-center">{{$comp["compañia_correo"]}}</td>
                    <td class="text-center">{{$comp["compañia_facebook"]}}</td>
                    <td class="text-center">{{$comp["compañia_instagram"]}}</td>
                    <td class="text-center">
                        @can ('editar->compania')
                        <form action="{{route('compania.destroy',$comp["compania_rtn"])}}"  method='POST' >
                            <a href="{{route('compania.edit',$comp["compania_rtn"])}}" class="btn btn-warning btm-sm fa fa-edit"></a>
                            @can ('borrar->compania')
                            <button type="submit" class="btn btn-danger btm-sm fa fa-times-circle">   
                             @csrf
                             @method('DELETE')
                            </button>
                            @endcan
                        </form>
                        @endcan
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection