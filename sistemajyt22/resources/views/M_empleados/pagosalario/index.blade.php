@extends('layouts.app')

@section('content')
@can ('crear->pagosalario')
<a 
    href="{{route('pagosalario.create')}}"
    class="btn btn-outline-info text-center btn-block">
    <spam>Crear pago</spam> <i class="fas fa-plus-square"></i>
</a>
@endcan

<div class="table-responsive-sm mt-5">
    <table id="tablapagosalario" class="table table-stripped table-bordered table-condensed table-hover">
        <thead class=thead-dark>
            <tr>
                <th class="text-center">Codigo Pago</th>
                <th class="text-center">Codigo Usuario</th>
                <th class="text-center">Sueldo Bruto</th>
                <th class="text-center">IHSS</th>
                <th class="text-center">RAP</th>
                <th class="text-center">otras deducciones</th>
                <th class="text-center">vacaciones</th>
                <th class="text-center">Descripcion vacaciones</th>
                <th class="text-center">salario</th>
                <th class="text-center">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1; @endphp
            @foreach($pagosaalario as $pago)
                <tr>
                    <td class="text-center">{{$i}}</td>
                    <td class="text-center">{{$pago["name"]}}</td>
                    <td class="text-center">{{$pago["sueldo_bruto"]}}</td>
                    <td class="text-center">{{$pago["IHSS"]}}</td>
                    <td class="text-center">{{$pago["RAP"]}}</td>
                    <td class="text-center">{{$pago["otras_deducciones"]}}</td>
                    <td class="text-center">{{$pago["vacaciones"]}}</td>
                    <td class="text-center">{{$pago["descripcion_vacaciones"]}}</td>
                    <td class="text-center">{{$pago["salario"]}}</td>
                    <td class="text-center">
                        @can ('editar->pagosalario')
                        <form action="{{route('pagosalario.destroy',$pago["cod_pago"])}}"  method='POST' >
                            <a href="{{route('pagosalario.edit',$pago["cod_pago"])}}" class="btn btn-warning btm-sm fa fa-edit"></a>
                            @can ('borrar->pagosalario')
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