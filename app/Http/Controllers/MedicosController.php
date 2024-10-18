<?php

namespace App\Http\Controllers;
use App\Models\medico;
use App\Models\especialidad;


use Illuminate\Http\Request;

class MedicosController extends Controller
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
    public function index($id)
    {
        // Listar todos los médicos de una especialidad específica
        $medico = medico::select(
            "medico.codigo_medico",
            "medico.nombre",
            "medico.apellido",
            "medico.telefono",
            "especialidad.nombre as especialidad"
        )
        ->join("especialidad", "especialidad.codico_especialidad", "=", "medico.especialidad")
        ->where("medico.especialidad", $id)
        ->get();
    
        return view('/medicos/show')->with(['medico' => $medico]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $especialidad = especialidad::all();
        return view('/medicos/create')->with(['especialidad'=>$especialidad]); 
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
            'nombre' => 'required|string|regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ\s]+$/',
            'apellido' => 'required|string|regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ\s]+$/',
            'especialidad' => 'required|string',
            'telefono' => 'required|integer',
        ], [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'nombre.regex' => 'El campo nombre solo debe contener letras y espacios.',
            'apellido.required' => 'El campo apellido es obligatorio.',
            'apellido.regex' => 'El campo apellido solo debe contener letras y espacios.',
            'especialidad.required' => 'El campo especialidad es obligatorio.',
            'telefono.required' => 'El campo teléfono es obligatorio.',
            'telefono.integer' => 'El campo telefono solo debe contener números.',
        ]);
            // Enviar insert 
            medico::create($data); 
            // Redireccionar 
            return redirect('/medicos/views'); 
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
    public function edit(medico $medico)
    {
        $especialidad = especialidad::all(); 

        return view('medicos/update')->with(['medico'=>$medico,'especialidad'=>$especialidad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,medico $medico)
    {
        $data = request()->validate([ 
            'nombre' => 'required|string|regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ\s]+$/',
            'apellido' => 'required|string|regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ\s]+$/',
            'especialidad' => 'required|string',
            'telefono' => 'required|integer',
        ], [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'nombre.regex' => 'El campo nombre solo debe contener letras y espacios.',
            'apellido.required' => 'El campo apellido es obligatorio.',
            'apellido.regex' => 'El campo apellido solo debe contener letras y espacios.',
            'especialidad.required' => 'El campo especialidad es obligatorio.',
            'telefono.required' => 'El campo teléfono es obligatorio.',
            'telefono.integer' => 'El campo telefono solo debe contener números.',
        ]);

            $medico->nombre = $data['nombre']; 
            $medico->apellido = $data['apellido']; 
            $medico->especialidad = $data['especialidad'];
            $medico->telefono = $data['telefono'];
            $medico->updated_at = now();
            $medico->save(); 
            // Redireccionar 
            
            return redirect('/medicos/views'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        medico::destroy($id);
        return response()->json(array('res'=>true)); 
    }
}
