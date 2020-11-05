<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Curso;


class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (Auth::id() != null) {
           
        
        $user = User::where('id',Auth::id())->get();
        if ($user[0]->is_admin == 1) {
            return view('cursos.create');
        }
    }
        return "forbidden";


        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->titulo = $request->input('titulo');
        $curso->descripcion = $request->input('descripcion');
        $curso->precio = $request->input('precio');
        $curso->fecha_estreno = $request->input('fecha_estreno');
        $curso->created_by = Auth::id();
        $curso->short_description =  $request->input('descripcion_corta');
        $curso->horas = $request->input('horas');
        $curso->clases =  $request->input('clases');
        $curso->author = $request->input('autor');
        $imagen = $request->file('imagen');
        $nombre_imagen = time().$imagen->getClientOriginalName();
        $path  = $imagen->storeAs('img', $nombre_imagen);        
        $curso->imagen = 'img/'.$nombre_imagen;
        $curso->save();
        return redirect('/manager');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
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
    }
}
