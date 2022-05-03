@extends('layouts.app')

@section('content')
<form action="{{route('detalleventas.store')}}" method='POST'>
        @csrf
        <div class="card  mb-2">
            <div  class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Codigo Venta</label>
                <select class="col-sm-7" class="form-control" id="codv" name="codv">
                    <option selected>Escoja un codigo de venta</option>
                    @foreach($ventas as $codvent)
                        {
                            <option id=".$codvent['codv']">{{$codvent["cod_venta"]}}</option>
                        }
                    @endforeach
                </select>
                @if ($errors->has('codv'))
                    <div     
                        id="codv-error"                                          
                        class="error text-danger pl-3"
                        for="codv"
                        style="display: block;">
                        <strong>{{$errors->first('codv')}}</strong>
                    </div>
                @endif
            </div>

            <div  class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Nombre Producto</label>
                <select class="col-sm-7" class="form-control"  id="codigop" name="codigop">
                    <option selected>Escoja un codigo de producto</option>
                    @foreach($producto as $product)
                        {
                            <option id=".$product['codigop']">{{$product["nombre_producto"]}}</option>
                        }
                    @endforeach
                </select>
                @if ($errors->has('codigop'))
                    <div     
                        id="codigop-error"                                          
                        class="error text-danger pl-3"
                        for="codigop"
                        style="display: block;">
                        <strong>{{$errors->first('codigop')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Cantidad</label>
                 <div class="col-sm-7">
                    <input type="number" id="cantidad" name="cantidad"  min="1" max="200000" class="form-control" placeholder="Ingrese la Cantidad">
                </div>
                @if ($errors->has('cantidad'))
                    <div               
                        id="cantidad-error"                               
                        class="error text-danger pl-3"
                        for="cantidad"
                        style="display: block;">
                        <strong>{{$errors->first('cantidad')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Precio de Venta</label>
                 <div class="col-sm-7">
                    <input type="number" id="precio" name="precio" min="2" max="500000" class="form-control" placeholder="Ingrese el precio de venta">
                </div>
                @if ($errors->has('precio'))
                    <div                 
                        id="precio-error"                             
                        class="error text-danger pl-3"
                        for="precio"
                        style="display: block;">
                        <strong>{{$errors->first('precio')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Descuento</label>
                 <div class="col-sm-7">
                    <input type="number" id="descuento" name="descuento" min="0" max="100" step="0.01" class="form-control" placeholder="Ingrese el Descuento">
                </div>
                @if ($errors->has('descuento'))
                    <div          
                        id="descuento-error"                                     
                        class="error text-danger pl-3"
                        for="descuento"
                        style="display: block;">
                        <strong>{{$errors->first('descuento')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">ISV</label>
                 <div class="col-sm-7">
                    <input type="number" id="Impuesto" name="Impuesto"  class="form-control" readonly="" value="0.15">
                </div>
                @if ($errors->has('Impuesto'))
                    <div
                        id="Impuesto-error"                                                
                        class="error text-danger pl-3"
                        for="Impuesto"
                        style="display: block;">
                        <strong>{{$errors->first('Impuesto')}}</strong>
                    </div>
                 @endif
            </div>

            <!-- <script>
                function sumar(){
                    var numero1 = document.getElementById("cantidad").value;
                    var numero2 = document.getElementById("precio").value;
                    var numero3 = document.getElementById("descuento").value;
                    var numero4 = document.getElementById("Impuesto").value;

                    var resultado1= numero1*numero2
                    var resultado2=  (resultado1-(resultado1 * numero3));
                    var resultado3=  (resultado2+(resultado2*numero4));
                    
                    document.writeln(resultado3);
                }
            </script> -->

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Total</label>
                 <div class="col-sm-7">
                    <input type="number" id="total" name="total" min="2" max="1000000" class="form-control">
                </div>
                @if ($errors->has('total'))
                    <div
                        id="total-error"                                              
                        class="error text-danger pl-3"
                        for="total"
                        style="display: block;">
                        <strong>{{$errors->first('total')}}</strong>
                     </div>
                @endif
            </div>
            <!-- <button onclick="sumar()">Sumar</button> -->

            <div class="row">
                <div class="col-sm-6 col-xs-12 mb-2">
                    <a href="{{route('detalleventas.index')}}"
                    class="btn btn-danger w-100"
                    >Cancelar <i class="fa fa-times-circle ml-2"></i></a>
                </div>
                <div class="col-sm-6 col-xs-12 mb-2">
                    <button 
                        type="submit"
                        class="btn btn-success w-100">
                        Guardar <i class="fa fa-check-circle ml-2"></i>
                    </button>
                </div>
            </div>
        </div>
     </form>
@endsection