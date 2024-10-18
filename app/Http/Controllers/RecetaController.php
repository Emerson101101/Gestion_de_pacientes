<?php

namespace App\Http\Controllers;
use App\Models\receta;
use App\Models\medicamento;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receta = receta::select(
            "recetas.codigo_receta",
            "recetas.horario",
            "recetas.fecha",
            "recetas.dias",
            "recetas.dosis",
            "medicamento.nombre as medicamento"
        )
        ->join("medicamento", "medicamento.codigo_medicamento", "=", "recetas.medicamento") 
        ->get();
        
        return view('recetas.show')->with(['receta' => $receta]);
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicamento = medicamento::all();

        return view('/recetas/create')->with(['medicamento'=>$medicamento]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([ 
            'medicamento' => 'required|string',
            'horario' => 'required|string',
            'fecha' => 'required|date',
            'dias' => 'required|string',
            'dosis' => 'required|string',
        ], [
            'medicamento.required' => 'El campo medicamento es obligatorio.',
            'horario.required' => 'El campo horario es obligatorio.',
            'fecha.required' => 'El campo fecha es obligatorio.',
            'dias.required' => 'El campo días es obligatorio.',
            'dosis.required' => 'El campo dosis es obligatorio.',
        ]);
            // Enviar insert 
            receta::create($data); 
            // Redireccionar 
            return redirect('/recetas/show'); 
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
    public function edit(receta $receta)
    {
        $medicamento = medicamento::all(); 

        return view('recetas/update')->with(['receta'=>$receta,'medicamento'=>$medicamento]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, receta $receta)
    {
        $data = request()->validate([ 
            'medicamento' => 'required|string',
            'horario' => 'required|string',
            'fecha' => 'required|date',
            'dias' => 'required|string',
            'dosis' => 'required|string',
        ], [
            'medicamento.required' => 'El campo medicamento es obligatorio.',
            'horario.required' => 'El campo horario es obligatorio.',
            'fecha.required' => 'El campo fecha es obligatorio.',
            'dias.required' => 'El campo días es obligatorio.',
            'dosis.required' => 'El campo dosis es obligatorio.',
           
        ]);

            $receta->medicamento = $data['medicamento']; 
            $receta->horario = $data['horario']; 
            $receta->fecha = $data['fecha'];    
            $receta->dias = $data['dias']; 
            $receta->dosis = $data['dosis']; 
            $receta->updated_at = now();
            $receta->save(); 
            // Redireccionar 
            return redirect('/recetas/show'); 
     
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        receta::destroy($id);
        return response()->json(array('res'=>true)); 
    }
}
