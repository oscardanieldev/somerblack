@extends('layouts.navbar')
@section('title')
            {{$articulo->nombre}}
@endsection
@section('content')

    <div class="container" style="margin-top: 80px;">
        <div class="row center-align">
            <div class="col s12">
                <h4 class="border-top border-bottom">{{$articulo->nombre}}</h4>
            </div>
        </div>
        <div class="row center-align" style="margin: 0;">
            <div class="col s12">
                <h5 class="green-text">$ {{$articulo->precio}}</h5>
            </div>
            <div class="col s12">
                <p>{{$articulo->descripcion}}</p>
            </div>
        </div>
     
        <div class="carousel" style="margin-top: -50px;">
                <div class="carousel-item" >
                    <img class="responsive-img materialboxed " src="/storage/{{$articulo->imagen1}}">
                </div>
            
            @if($articulo->imagen2)

                <div class="carousel-item" >
                    <img class="responsive-img materialboxed" src="/storage/{{$articulo->imagen2}}">
                </div>
                @if($articulo->imagen3)
                    <div class="carousel-item" >
                        <img class="responsive-img materialboxed" src="/storage/{{$articulo->imagen3}}">
                    </div>
                    @if($articulo->imagen4)
                        <div class="carousel-item" >
                            <img class="responsive-img materialboxed" src="/storage/{{$articulo->imagen4}}">
                        </div>
                     @endif
                @endif


            @endif
        </div>
    </div>

@endsection
@section('inicializacionjs')
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.carousel');
        var instances = M.Carousel.init(elems);

        var elems = document.querySelectorAll('.materialboxed');
        var instances = M.Materialbox.init(elems);
    });
@endsection