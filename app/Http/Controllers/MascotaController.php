<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Mascota;
use App\Color;

class MascotaController extends Controller
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

    public function listarPorPersona($persona_id)
    {
        $persona = Persona::find($persona_id);
        $mascotas = $persona->mascotas;
        return view('mascotas.index', compact(['persona', 'mascotas']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($persona_id)
    {
        $colores = Color::all();
        $persona = Persona::find($persona_id);

        return view('mascotas.create', compact(['colores', 'persona']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mascota = Mascota::create($request->all());
        return redirect()->route('mascotas.index', ['persona_id' => $request->get('persona_id')]);
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
        $mascota = Mascota::find($id);
        $persona = Persona::find($mascota->persona_id);
        // $persona = $mascota->persona;
        $colores = Color::all();
        return view('mascotas.edit', compact(['mascota', 'persona', 'colores']));
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
        $mascota = Mascota::find($id);
        $mascota->fill($request->all());
        $mascota->save();

        return redirect()->route('mascotas.index', ['persona_id' => $mascota->persona_id]);
    }

    public function delete($id)
    {
        $mascota = Mascota::find($id);
        return view('mascotas.delete', compact(['mascota']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mascota = Mascota::find($id);
        $persona = Persona::find($mascota->persona_id);

        $mascota->delete();

        return redirect()->route('mascotas.index', ['persona_id' => $persona->id]);
    }
}
