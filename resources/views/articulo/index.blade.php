@extends('layouts.navbar')
@section('title', 'Gestor de productos')
@section('content')
    
    <div  class="container"  style="margin-top: 80px;">
        <div class="center-align">
            <h4>Gestor de productos</h4>
            <br>
            <a href="{{route('articulo.create')}}" class="waves-effect waves-light btn red darken-4"><i class="material-icons right">add</i>Agregar Producto</a>
        </div>
            <div class="row py-3">
        @foreach($articulos as $key => $articulo)

                <div class="col s6 m4 center-align">
                    <div class="card">
                        <div class="card-image">
                            <img class="responsive-img" src="/storage/{{$articulo->imagen1}}">
                            <span class="card-title"> {{$articulo->nombre}}</span>
                        </div>

                        <div class="card-action ">
                            <div class="show-on-medium-and-down hide-on-large-only">
                                <a  style="margin: 0 ;" href="{{route('articulo.show', ['articulo' => $articulo->id])}}"><i class="small material-icons  green-text iconos-producto">remove_red_eye</i></a>
                                <a  style="margin: 0 ;" href="#"><i class=" small material-icons blue-text iconos-producto">edit</i></a>
                                <a  style="margin: 0 ;" href="#"><i class=" small material-icons red-text iconos-producto">delete_forever</i></a>
                            </div>
                            <div class="show-on-large hide-on-med-and-down"> 
                                <a  style="margin: 0 10px;" href="{{route('articulo.show', ['articulo' => $articulo->id])}}"><i class="small material-icons  green-text iconos-producto">remove_red_eye</i></a>
                                <a  style="margin: 0 10px;" href=""><i class=" small material-icons blue-text iconos-producto">edit</i></a>
                                <a  style="margin: 0 10px;" href=""><i class=" small material-icons red-text iconos-producto">delete_forever</i></a>
                            </div>
                        </div>
                      </div>
                   
                </div>
        @endforeach

            </div>
    </div>

@endsection
@section('inicializacionjs')

@endsection
