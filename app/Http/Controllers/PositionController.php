<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Position;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $positions = Position::all();
        return view('positions.index', compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('positions.create');
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
        $request->validate([
            'name' => 'required'
        ]);
        Position::create($request->all());
        return redirect()->route('positions.index');
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
    public function edit(Position $position)
    {
        //
        return view('positions.edit', compact('position'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Position $position)
    {
        //
        $request->validate([
            'name' => 'required'
        ]);
        $position->update($request->all());
        return redirect()->route('positions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Position $position)
    {
        //
        // Verificar si el campo 'state' es 1 y cambiarlo a 0, o viceversa.
        $position->state = $position->state == 1 ? 0 : 1;

        // Guardar el modelo actualizado en la base de datos.
        $position->save();

        // Establecer un mensaje en la sesión
        session()->flash('success', 'La posición se eliminó con éxito');

        // return redirect()->route('positions.index');
        // Devolver una respuesta JSON indicando el resultado de la eliminación
        return response()->json(['message' => 'La posición se eliminó con éxito']);
    }
}
