@extends('layouts.app')

@section('content')
<form action="{{route('compania.store')}}" method='POST'>
        @csrf
        <div class="card  mb-2">

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">RTN</label>
                 <div class="col-sm-7">
                    <input type="text" id="RTN" name="RTN" class="form-control" placeholder="Ingrese el rtn">
                </div>
                @if ($errors->has('RTN'))
                    <div               
                        id="RTN-error"                               
                        class="error text-danger pl-3"
                        for="RTN"
                        style="display: block;">
                        <strong>{{$errors->first('RTN')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Compañia CAI</label>
                 <div class="col-sm-7">
                    <input type="text" id="CAI" name="CAI" class="form-control" placeholder="Ingrese el cai">
                </div>
                @if ($errors->has('CAI'))
                    <div                 
                        id="CAI-error"                             
                        class="error text-danger pl-3"
                        for="CAI"
                        style="display: block;">
                        <strong>{{$errors->first('CAI')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Nombre legal</label>
                 <div class="col-sm-7">
                    <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="Ingrese el Nombre">
                </div>
                @if ($errors->has('Nombre'))
                    <div          
                        id="Nombre-error"                                     
                        class="error text-danger pl-3"
                        for="Nombre"
                        style="display: block;">
                        <strong>{{$errors->first('Nombre')}}</strong>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Nombre Comercial</label>
                 <div class="col-sm-7">
                    <input type="text" id="Comercial" name="Comercial"  class="form-control" placeholder="Ingrese el nombe comercial">
                </div>
                @if ($errors->has('Comercial'))
                    <div
                        id="Comercial-error"                                                
                        class="error text-danger pl-3"
                        for="Comercial"
                        style="display: block;">
                        <strong>{{$errors->first('Comercial')}}</strong>
                    </div>
                 @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Pagina Web</label>
                 <div class="col-sm-7">
                    <input type="text" id="Pagina" name="Pagina" class="form-control" placeholder="Ingrese la pagina web">
                </div>
                @if ($errors->has('Pagina'))
                    <div
                        id="Pagina-error"                                              
                        class="error text-danger pl-3"
                        for="Pagina"
                        style="display: block;">
                        <strong>{{$errors->first('Pagina')}}</strong>
                     </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Correo</label>
                 <div class="col-sm-7">
                    <input type="email" id="Correo" name="Correo" class="form-control" placeholder="Ingrese el correo">
                </div>
                @if ($errors->has('Correo'))
                    <div
                        id="Correo-error"                                              
                        class="error text-danger pl-3"
                        for="Correo"
                        style="display: block;">
                        <strong>{{$errors->first('Correo')}}</strong>
                     </div>
                @endif
            </div>

            
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Facebook</label>
                 <div class="col-sm-7">
                    <input type="text" id="Facebook" name="Facebook" class="form-control" placeholder="Ingrese el feacebook">
                </div>
                @if ($errors->has('Facebook'))
                    <div
                        id="Facebook-error"                                              
                        class="error text-danger pl-3"
                        for="Facebook"
                        style="display: block;">
                        <strong>{{$errors->first('Facebook')}}</strong>
                     </div>
                @endif
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Instagram</label>
                 <div class="col-sm-7">
                    <input type="text" id="Instagram" name="Instagram" class="form-control" placeholder="Ingrese el instagram">
                </div>
                @if ($errors->has('Instagram'))
                    <div
                        id="Instagram-error"                                              
                        class="error text-danger pl-3"
                        for="Instagram"
                        style="display: block;">
                        <strong>{{$errors->first('Instagram')}}</strong>
                     </div>
                @endif
            </div>

            <div class="row">
                <div class="col-sm-6 col-xs-12 mb-2">
                    <a href="{{route('compania.index')}}"
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