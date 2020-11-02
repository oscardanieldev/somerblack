@extends('layouts.navbar')
@section('title', 'Nuevo Producto')
@section('content')
    
    <div  class="container"  style="margin-top: 80px;">
        <div class="center-align">
            <h4>Nuevo producto</h4>
        </div>
        <div class="center-align contenedor-formulario ">   
            <form method="POST" action="{{route('articulo.store')}}" enctype="multipart/form-data" class="center-align">
                    @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" id="nombre" name="nombre" class="validate" required value="{{old('nombre')}}">
                                    <label for="nombre">Nombre*</label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" id="descripcion" name="descripcion" class="validate" required value="{{old('descripcion')}}">
                                    <label for="descripcion">Descripción</label>
                                </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                  <input type="text" id="descricpion" name="precio" class="validate"  value="{{old('precio')}}">
                                  <label for="descripcion">Precio ($ MXN)</label>
                              </div>
                          </div>
                            {{--------------------------------IMAGENES---------------------------- --}}

                            <div class="file-field input-field">
                                <div class="btn">
                                  <span>Imagen 1</span>
                                  <input type="file" name="imagen1">
                                </div>
                                <div class="file-path-wrapper">
                                  <input class="file-path validate" type="text" name="imagen1">
                                </div>
                            </div>
                            <div class="file-field input-field">
                                <div class="btn">
                                  <span>Imagen 2</span>
                                  <input type="file" name="imagen2">
                                </div>
                                <div class="file-path-wrapper">
                                  <input class="file-path validate" type="text" name="imagen2">
                                </div>
                            </div>
                            <div class="file-field input-field">
                                <div class="btn">
                                  <span>Imagen 3</span>
                                  <input type="file" name="imagen3">
                                </div>
                                <div class="file-path-wrapper">
                                  <input class="file-path validate" type="text" name="imagen3">
                                </div>
                            </div>
                            <div class="file-field input-field">
                                <div class="btn">
                                  <span>Imagen 4</span>
                                  <input type="file" name="imagen4">
                                </div>
                                <div class="file-path-wrapper">
                                  <input class="file-path validate" type="text" name="imagen4">
                                </div>
                            </div>
                            {{------------------------------------------------------------ --}}
                            <div class="row" style="margin-top: 110px">
                                <div class="input-field col s12 ">
                                    <button class="btn waves-effect waves-light" type="submit" >Enviar
                                        <i class="material-icons right">send</i>
                                      </button>
                                </div>
                            </div>
                            
    
            </form>
        </div> 
    </div>

@endsection
@section('inicializacionjs')

@endsection
