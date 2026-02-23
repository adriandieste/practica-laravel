<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::paginate(10);
        return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:alumnos,email',
            'telefono' => 'nullable|string|max:20',
            'direccion' => 'nullable|string|max:500',
        ], [
            'nombre.required' => __('validation.required', ['attribute' => __('alumnos.nombre')]),
            'email.required' => __('validation.required', ['attribute' => __('alumnos.email')]),
            'email.email' => __('validation.email', ['attribute' => __('alumnos.email')]),
            'email.unique' => __('validation.unique', ['attribute' => __('alumnos.email')]),
        ]);

        Alumno::create($validated);

        return redirect()->route('alumnos.index')
            ->with('success', __('messages.alumno_created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        return view('alumnos.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        return view('alumnos.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:alumnos,email,' . $alumno->id,
            'telefono' => 'nullable|string|max:20',
            'direccion' => 'nullable|string|max:500',
        ], [
            'nombre.required' => __('validation.required', ['attribute' => __('alumnos.nombre')]),
            'email.required' => __('validation.required', ['attribute' => __('alumnos.email')]),
            'email.email' => __('validation.email', ['attribute' => __('alumnos.email')]),
            'email.unique' => __('validation.unique', ['attribute' => __('alumnos.email')]),
        ]);

        $alumno->update($validated);

        return redirect()->route('alumnos.index')
            ->with('success', __('messages.alumno_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();

        return redirect()->route('alumnos.index')
            ->with('success', __('messages.alumno_deleted'));
    }
}
