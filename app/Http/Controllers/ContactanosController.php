<?php

namespace App\Http\Controllers;

use App\Mensaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;



class ContactanosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contactanos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = request()->validate([
                
                'nombre' => 'required',
                'apellido' => 'required',
                'email' => 'required',
                'telefono' => '',
                'mensaje' => 'required',
                'privacidad' => 'required',
        ]);

        if ($data['privacidad'] = true) {
    
            DB::table('mensajes')->insert([
                'nombre' => $data['nombre'],
                'apellido' => $data['apellido'],
                'email' => $data['email'],
                'telefono' => $data['telefono'],
                'mensaje' => $data['mensaje'],
                'privacidad' => $data['privacidad'],
            ]);

        }
        Session::flash('mensaje_recibido','Recibimos tu mensaje, pronto nos pondremos en contacto contigo');

        return redirect()->action('ContactanosController@create');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $mensaje=Mensaje::findOrFail($id)->delete();
        return redirect()->action('HomeController@index');
    }
}
