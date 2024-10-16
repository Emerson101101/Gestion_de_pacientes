<?php

namespace App\Http\Controllers;
use App\Models\medico;
use App\Models\especialidad;
use App\Models\pacientes;
use App\Models\cita;
use Illuminate\Http\Request;

class CitaController extends Controller
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
        // Listar todas las citas
        $citas = Cita::select(
                'citas.codigo_cita',
                'citas.fecha',
                'citas.hora',
                'citas.motivo',
                'paciente.nombre as paciente',
                'medico.nombre as medico',
                'especialidad.nombre as especialidad'
            )
            ->join('paciente', 'paciente.codigo_paciente', '=', 'citas.paciente') // Asegúrate de que la tabla es 'paciente'
            ->join('medico', 'medico.codigo_medico', '=', 'citas.medico')
            ->join('especialidad', 'especialidad.codico_especialidad', '=', 'citas.especialidad')
            ->get();
    
        return view('citas.show')->with(['cita' => $citas]); // Asegúrate de que la vista es correcta
    }
    

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $pacientes = pacientes::all(); // Asegúrate de usar el nombre correcto de la clase
    $medico = medico::all(); // Cambié 'medico' a 'medicos' para consistencia
    $especialidad = especialidad::all(); // Cambié 'especialidad' a 'especialidades' para consistencia

    return view('citas.create')->with([
        'pacientes' => $pacientes,
        'medico' => $medico,
        'especialidad' => $especialidad
    ]);
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
            'paciente' => 'required|string',
            'medico' => 'required|string',
            'especialidad' => 'required|string',
            'fecha' => 'required|date',
            'hora' => 'required|string',
            'motivo' => 'required|string',
        ], [
            'paciente.required' => 'El campo paciente es obligatorio.',
            'medico.required' => 'El campo médico es obligatorio.',
            'especialidad.required' => 'El campo especialidad es obligatorio.',
            'fecha.required' => 'El campo fecha es obligatorio.',
            'hora.required' => 'El campo hora es obligatorio.',
            'motivo.required' => 'El campo motivo es obligatorio.',
        ]);
        // Enviar insert 
        Cita::create($data); 
    
        // Redireccionar 
        return redirect('/citas/show'); 
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
    public function edit(Cita $citas)
    {
        $pacientes = pacientes::all(); 
        $medicos = medico::all(); 
        $especialidad = especialidad::all(); 

        return view('citas/update')->with([
            'citas' => $citas,
            'pacientes' => $pacientes,
            'medicos' => $medicos,
            'especialidad' => $especialidad
        ]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,cita $citas)
    {
        $data = request()->validate([ 
            'paciente' => 'required|string',
            'medico' => 'required|string',
            'especialidad' => 'required|string',
            'fecha' => 'required|date',
            'hora' => 'required|string',
            'motivo' => 'required|string',
        ], [
            'paciente.required' => 'El campo paciente es obligatorio.',
            'medico.required' => 'El campo médico es obligatorio.',
            'especialidad.required' => 'El campo especialidad es obligatorio.',
            'fecha.required' => 'El campo fecha es obligatorio.',
            'hora.required' => 'El campo hora es obligatorio.',
            'motivo.required' => 'El campo motivo es obligatorio.',
        ]);; 

            $citas->paciente = $data['paciente']; 
            $citas->medico = $data['medico']; 
            $citas->especialidad = $data['especialidad'];
            $citas->fecha = $data['fecha'];
            $citas->hora = $data['hora'];
            $citas->motivo = $data['motivo'];
            $citas->updated_at = now();
            $citas->save(); 
            // Redireccionar 
            
            return redirect('/citas/show'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        cita::destroy($id);
        return response()->json(array('res'=>true)); 
    }
}
