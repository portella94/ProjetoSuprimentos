<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsuarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', compact(['usuarios']));
    }

    //
}
