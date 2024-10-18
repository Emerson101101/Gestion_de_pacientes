<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\medicamento;
use Illuminate\Support\Facades\Storage;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicamento = medicamento::All();

        return view('/medicamento/show')->with(['medicamento'=>$medicamento]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/medicamento/create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'fechaI' => 'required|date',
            'fechaV' => 'required|date',
            'forma' => 'required|string|max:255',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación de imagen
        ], [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'fechaI.required' => 'El campo fecha de ingreso es obligatorio.',
            'fechaV.required' => 'El campo fecha de vencimiento es obligatorio.',
            'forma.required' => 'El campo forma es obligatorio.',
            'imagen.image' => 'El archivo debe ser una imagen.',
            'imagen.mimes' => 'La imagen debe ser en formato jpeg, png, jpg o gif.',
        ]);
    
        // Crear una nueva instancia de medicamento
        $medicamento = new Medicamento();
        $medicamento->nombre = $data['nombre'];
        $medicamento->fechaI = $data['fechaI'];
        $medicamento->fechaV = $data['fechaV'];
        $medicamento->forma = $data['forma'];
    
        // Manejar la carga de la imagen
        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('imagenes', 'public'); // Guarda en public/imagenes
            $medicamento->imagen = $imagenPath; // Guarda solo la ruta en el modelo
        }
    
        // Guardar el medicamento
        $medicamento->save();
    
        // Redireccionar
        return redirect('/medicamento/show')->with('success', 'Medicamento creado exitosamente.');
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
    public function edit(medicamento $medicamento)
    {
        return view('medicamento/update')->with(['medicamento'=>$medicamento]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medicamento $medicamento)
        {
            $data = $request->validate([
                'nombre' => 'required',
                'fechaI' => 'required|date',
                'fechaV' => 'required|date',
                'forma' => 'required|string',
                'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación de imagen
            ], [
                'nombre.required' => 'El campo nombre es obligatorio.',
                'fechaI.required' => 'El campo fecha de ingreso es obligatorio.',
                'fechaV.required' => 'El campo fecha de vencimiento es obligatorio.',
                'forma.required' => 'El campo forma es obligatorio.',
                'imagen.image' => 'El archivo debe ser una imagen.',
                'imagen.mimes' => 'La imagen debe ser en formato jpeg, png, jpg o gif.',
            ]);

            $medicamento->nombre = $data['nombre']; 
            $medicamento->fechaI = $data['fechaI']; 
            $medicamento->fechaV = $data['fechaV']; 
            $medicamento->forma = $data['forma']; 

            // Manejar la carga de la nueva imagen
            if ($request->hasFile('imagen')) {
                // Eliminar la imagen anterior si existe (opcional)
                if ($medicamento->imagen) {
                    Storage::disk('public')->delete($medicamento->imagen);
                }

                $imagenPath = $request->file('imagen')->store('imagenes', 'public'); // Guarda en public/imagenes
                $medicamento->imagen = $imagenPath; // Guarda solo la ruta en el modelo
            }

            $medicamento->updated_at = now();
            $medicamento->save(); 

            // Redireccionar 
            return redirect('/medicamento/show')->with('success', 'Medicamento actualizado exitosamente.');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        medicamento::destroy($id);
        return response()->json(['res' => true]);
    }
    
}