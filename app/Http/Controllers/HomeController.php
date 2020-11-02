<?php

namespace App\Http\Controllers;

use App\Mensaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $mensajes = DB::table('mensajes')->get();
        // $fecha=$mensajes->created_at->format('d-m-Y');
        // return view('home', compact('mensajes','fecha') );
        return view('home')->with('mensajes', $mensajes);
    }


}
