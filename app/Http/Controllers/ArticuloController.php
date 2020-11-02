<?php

namespace App\Http\Controllers;

use App\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class ArticuloController extends Controller
{
           /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = DB::table('articulos')->get();

        return view('articulo.index')->with('articulos', $articulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articulo/create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        //  dd($request['imagen1']->store('imagen-producto', 'public'));
        $data = request()->validate([
                
            'nombre' => 'required',
            'descripcion' => 'required',
            'imagen1' => 'required|image',
            'imagen2' => '',
            'imagen3' => '',
            'imagen4' => '',
            'precio'  => '',

    ]);

    $ruta_imagen1 = $request['imagen1']->store('imagen-producto', 'public');
    if ($request['imagen2'] && ! $request['imagen3'] && ! $request['imagen4'] ) {
        $ruta_imagen2 = $request['imagen2']->store('imagen-producto', 'public');
        $img2 = Image::make(public_path("storage/{$ruta_imagen2}"))->fit(1000, 1200);
        $img2->save();

    }
    if ($request['imagen2'] &&  $request['imagen3'] && ! $request['imagen4'] ) {

        $ruta_imagen2 = $request['imagen2']->store('imagen-producto', 'public');
        $img2 = Image::make(public_path("storage/{$ruta_imagen2}"))->fit(1000, 1200);
        $img2->save();

        $ruta_imagen3 = $request['imagen3']->store('imagen-producto', 'public');
        $img3 = Image::make(public_path("storage/{$ruta_imagen3}"))->fit(1000, 1200);
        $img3->save();

    }
    if ($request['imagen2'] &&  $request['imagen3'] &&  $request['imagen4'] ) {

        $ruta_imagen2 = $request['imagen2']->store('imagen-producto', 'public');
        $img2 = Image::make(public_path("storage/{$ruta_imagen2}"))->fit(1000, 1200);
        $img2->save();

        $ruta_imagen3 = $request['imagen3']->store('imagen-producto', 'public');
        $img3 = Image::make(public_path("storage/{$ruta_imagen3}"))->fit(1000, 1200);
        $img3->save();

        $ruta_imagen4 = $request['imagen4']->store('imagen-producto', 'public');
        $img4 = Image::make(public_path("storage/{$ruta_imagen4}"))->fit(1000, 1200);
        $img4->save();

    }

    //Resuze de la imagen

    $img1 = Image::make(public_path("storage/{$ruta_imagen1}"))->fit(1000, 1200);
    $img1->save();




    if ($data['privacidad'] = true &&  $request['imagen2']  && !  $request['imagen3'] && !  $request['imagen4']) {

        DB::table('articulos')->insert([
            'nombre' => $data['nombre'],
            'descripcion' => $data['descripcion'],
            'imagen1' => $ruta_imagen1,
            'imagen2' => $ruta_imagen2,
            'precio'  => $data['precio'],

        ]);
        return redirect()->action('ArticuloController@index');

    }
    if ($data['privacidad'] = true && $request['imagen2']  &&  $request['imagen3'] && !  $request['imagen4']) {

        DB::table('articulos')->insert([
            'nombre' => $data['nombre'],
            'descripcion' => $data['descripcion'],
            'imagen1' => $ruta_imagen1,
            'imagen2' => $ruta_imagen2,
            'imagen3' => $ruta_imagen3,
            'precio'  => $data['precio'],


        ]);
        return redirect()->action('ArticuloController@index');

    }
    if ($data['privacidad'] = true && $request['imagen2']  &&  $request['imagen3'] && $request['imagen4']) {

        DB::table('articulos')->insert([
            'nombre' => $data['nombre'],
            'descripcion' => $data['descripcion'],
            'imagen1' => $ruta_imagen1,
            'imagen2' => $ruta_imagen2,
            'imagen3' => $ruta_imagen3,
            'imagen4' => $ruta_imagen4,
            'precio'  => $data['precio'],


        ]);
        return redirect()->action('ArticuloController@index');

    }
    if ($data['privacidad'] = true) {

        DB::table('articulos')->insert([
            'nombre' => $data['nombre'],
            'descripcion' => $data['descripcion'],
            'imagen1' => $ruta_imagen1,
            'precio'  => $data['precio'],


        ]);
        return redirect()->action('ArticuloController@index');

    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show(Articulo $articulo)
    {
        
        return view('articulo.show', compact('articulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Articulo $articulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articulo $articulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articulo $articulo)
    {
        //
    }
}
