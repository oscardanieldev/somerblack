@extends('layouts.navbar')
@section('title', 'Contactanos')
@section('content')

    <div class="container animate__animated animate__fadeInLeft" style="margin-top: 80px;">
 

        <h4 class="center-align">
            Contáctanos
            @if(Session::has('mensaje_recibido'))

            <p class="center-align green accent-2 notificacion" style=" font-size: 18px;" role="alert" >
    
                Hemos recibido tu mensaje, pronto nos pondremos en contacto contigo
    
            </p>
            @endif
        </h4>

        <div class="center-align contenedor-formulario ">   
        <form method="POST" action="{{route('contactanos.store')}}" class="center-align">
                @csrf
                <div class="row">
                    <div class="input-field col s12 m6">
                    <input type="text" id="nombre" name="nombre" class="validate" required value="{{old('nombre')}}">
                        <label for="nombre">Nombre(s)*</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input type="text" id="apellido" name="apellido" class="validate" required value="{{old('apellido')}}">
                        <label for="apellido">Apellidos*</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">email</i>
                        <input type="email" id="email" name="email" class="validate" required value="{{old('email')}}">
                        <label for="email">Email*</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">phone</i>
                        <input type="tel" id="telefono" name="telefono" class="validate"  value="{{old('telefono')}}">
                        <label for="telefono">Teléfono</label>
                    </div>
                        <div class="row">
                            <div class="input-field col s12">
                            <i class="material-icons prefix">message</i>
                            <textarea id="mensaje" class="materialize-textarea validate" name="mensaje" required value="{{old('mensaje')}}"></textarea>
                            <label for="mensaje">Mensaje</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <label>
                                    <p class="aviso-de-privacidad">
                                        <input type="checkbox" name="privacidad" value=true class="validate" required/>
                                    <span>¿Acepta nuestra <a href="/politicadeprivacidad">Política de privacidad</a>?</span>
                                    </p>
                                </label>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 110px">
                            <div class="input-field col s12 ">
                                <button class="btn waves-effect waves-light" type="submit" >Enviar
                                    <i class="material-icons right">send</i>
                                  </button>
                            </div>
                        </div>
                        

                </div>
            </form>
        </div> 
    </div>



@endsection
@section('inicializacionjs')

    

@endsection


