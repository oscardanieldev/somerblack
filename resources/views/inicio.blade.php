@extends('layouts.navbar')
@section('title', 'Inicio')
@section('content')

    <div class="container" style="margin-top: 80px;">
        <div class="row">
            <div class="col s12 center-align">
                <span class="sansita" style="font-size: 2rem">
                    "Los símbolos reflejan secretos y apelan a nuestra curiosidad natural"
                </span>
            </div>
        </div>
        <div class="row py-3">
            @foreach($articulos as $key => $articulo)
                    <div class="col s6 m4 center-align ">
                        <a href="{{route('articulo.show', ['articulo' => $articulo->id])}}">
                            <div class="card carta-producto">
                                <div class="card-image">
                                <img class="responsive-img" src="/storage/{{$articulo->imagen1}}">
                                </div>
                                <div class="card-title py-1 black-text"> {{$articulo->nombre}}</div>
                            </div>
                        </a>
                    </div>
            @endforeach
    
        </div>
    </div>

@endsection
