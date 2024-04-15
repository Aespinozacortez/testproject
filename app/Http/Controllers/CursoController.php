<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Curso;
use App\Models\Passe;
use Illuminate\Database\Eloquent\Model;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cursos = Curso::all();

        return Inertia::render('Curso/index', ["cursos" => $cursos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $curso = new Curso();
        $curso->nom = $request->model['nom'];
        $curso->etapa = $request->model['etapa'];
        $curso->descripcion = $request->model['descripcion'];
        $curso->visibilidad = $request->model['visibilidad'];

        $curso->save();
        return redirect()->route("curso.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $curso = Curso::find($id);

        $curso->nom = $request->model['nom'];
        $curso->etapa = $request->model['etapa'];
        $curso->descripcion = $request->model['descripcion'];
        $curso->visibilidad = $request->model['visibilidad'];

        $curso->save();

        return redirect()->route("curso.index");
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $curso = Curso::findOrFail($id);

        $curso->delete();

        return redirect()->route("curso.index");
    }
}
