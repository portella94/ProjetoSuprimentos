<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    private User $usuario;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', compact(['usuarios']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $usuario = $this->usuario->create($data);
            return redirect()->route('usuarios.index')->with('sucess', 'Usuário armazendo com sucesso');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());;
        }
        return redirect()->back()->with('warning', 'Usuário não armazenado...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $usuario = $this->usuario->findOrFail($id);
            return view('usuarios.show', compact('usuario'));
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
        return redirect()->back()->with('warning', 'Usuário não encontrado...');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $usuario = $this->usuario->findOrFail($id);
            return view('usuarios.edit', compact('usuario'));
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
        return redirect()->back()->with('warning', 'Usuário não encontrado...');
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
        try {
            $data = $request->all();
            $usuario = $this->usuario->findOrFail($id);
            $usuario->update($data);
            return redirect()->route('usuarios.index')->with('sucess', 'Usuário atualizado');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
        return redirect()->back()->with('warning', 'Usuário não foi atualizado...');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $usuario = $this->usuario->findOrFail($id);
            $usuario->delete();
            return redirect()->route('usuarios.index')->with('sucess', 'Usuário deletado!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());;
        }
        return redirect()->back()->with('warning', 'Usuário não foi deletado...');
    }
}
