@extends('layouts.navbar')
@section('title', 'Mensajes')
@section('content')

    <div class="container"  style="margin-top: 80px;">
        <div class="center-align">
            <h4>Mensajes</h4>
        </div>
        @if($mensajes->isEmpty() !== true)
            
        @foreach($mensajes as $key => $mensaje)
        <div class="row  animate__animated animate__fadeInDown " style="margin: 0; ">
            <div class="col s11">
                <ul class="collapsible popout">
                    <li>
                        <div class="collapsible-header ">
                                <i class="material-icons left">person</i>
                                {{$mensaje->nombre}} {{$mensaje->apellido}} 
                        </div>
                        <div class="collapsible-body">
                            <div class="row">
                                <div class="col s12 m6">
                                    <i class="material-icons left">mail_outline</i>
                                    {{$mensaje->email}}
                                </div>
                                <div class="col s12 m6 ">
                                    <i class="material-icons left">local_phone</i>
                                    {{$mensaje->telefono}}
                                </div>
                            </div>
                            <div class="row py-1">
                                <div class="col s12">
                                    {{$mensaje->mensaje}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <strong>Mensaje recibido: </strong>{{$mensaje->created_at}}
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col s1">
            <form action="{{route('contactanos.destroy', ['mensaje' => $mensaje->id])}}" method="POST"> 
                @csrf
                @method('DELETE')
                    <button style="padding: 15px  0; margin: 0 0 0 -20px;" class="btn-flat"><i class=" material-icons red-text" style=" font-size: 3.6rem " >delete_forever</i></button>
            </form>
            </div>
        </div>
        @endforeach
        @else
            <div class="center-align contenedor-formulario animate__animated animate__fadeInDown" style="margin-bottom: 50vh">

                        <h6 class="hide-on-med-and-up show-on-medium-and-down">No hay mensajes</h6>
                        <h5 class="hide-on-med-and-down">No hay mensajes</h5>

            </div>
        @endif

    </div>
@endsection
@section('inicializacionjs')

    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems);

@endsection
