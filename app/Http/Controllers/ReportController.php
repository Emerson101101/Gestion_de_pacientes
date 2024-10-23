<?php

namespace App\Http\Controllers;
use App\Models\pacientes;
use App\Models\User;
use App\Models\especialidad;
use App\Models\medico;
use App\Models\receta;
use App\Models\cita;
use App\Models\medicamento;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    Public function reporteUno() 
        { 
        $data = pacientes::select( 
        "paciente.codigo_paciente", 
        "paciente.nombre", 
        "paciente.edad",
        "paciente.telefono",
        "paciente.fecha",
        "paciente.direccion",
        "paciente.detallesconsulta",
        )->get();

        $pdf = Pdf::loadView('/reports/pacientespdf', compact('data')); 
        return $pdf->stream('pacientes.pdf'); 
    }
    Public function reporteDos() 
    { 
    $data = medico::select(
        "medico.codigo_medico",
        "medico.nombre",
        "medico.apellido",
        "medico.telefono",
        "especialidad.nombre as especialidad"     
        )->join("especialidad", "especialidad.codico_especialidad", "=", "medico.especialidad")
        ->get(); 

    $pdf = Pdf::loadView('/reports/medicos', compact('data')); 
    return $pdf->stream('medicos.pdf'); 
    }
    Public function reportetres() 
    { 
        $data = especialidad::select( 
        "especialidad.codico_especialidad", 
        "especialidad.nombre", 
        )->get();

        $pdf = Pdf::loadView('/reports/especialidades', compact('data')); 
        return $pdf->stream('especialidades.pdf'); 
    }
    Public function reportecuatro() 
    {
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

        $pdf = Pdf::loadView('/reports/citas', compact('citas')); 
        return $pdf->stream('citas.pdf'); 
    }
    Public function reportecinco()
    {
        $data = receta::select(
           'recetas.codigo_receta',
           'recetas.nombre',
           'recetas.horario',
            'recetas.fecha',
            'recetas.dias',
            'recetas.dosis'
            )->get();

        $pdf = Pdf::loadView('/reports/recetas', compact('data')); 
        return $pdf->stream('receta.pdf'); 
    }

    Public function reporteSeis() 
    { 
    $data = user::select( 
        'name',
        'email'
        )->get();

        $pdf = Pdf::loadView('/reports/usuarios', compact('data')); 
        return $pdf->stream('usuarios.pdf'); 
    }
    Public function reportesiete() 
    {
        $data = medicamento::select(
            'medicamento.codigo_medicamento',
            'medicamento.nombre',
            'medicamento.fechaI',
            'medicamento.fechaV',
            'medicamento.forma',
            'medicamento.imagen',
        )
        ->get();

        $pdf = Pdf::loadView('/reports/medicamento', compact('data')); 
        return $pdf->stream('medicamento.pdf'); 
    }

    public function reporteFecha() {
        $data1 = request()->validate([ 
            'fecha' => 'required' // Asegúrate de validar que sea una fecha válida
        ]); 
    
        $id = $data1['fecha'];
        
        $data = pacientes::select( // Asegúrate de que el modelo se llame Paciente
            "paciente.codigo_paciente", 
            "paciente.nombre", 
            "paciente.edad",
            "paciente.telefono",
            "paciente.fecha",
            "paciente.direccion",
            "paciente.detallesconsulta"
        )
        ->where("paciente.fecha", $id)
        ->get(); 
    
        // Cargar vista del reporte con la data
        $pdf = Pdf::loadView('/reports/pacientespdf', compact('data')); 
        return $pdf->stream('fechaPaciente.pdf'); 
    }


 public function reporteCitaPorFechaYMedico() {
    $data = request()->validate([
        'fecha' => 'nullable|date', 
        'medico' => 'nullable'
    ]);

    // Inicializar la consulta
    $query = Cita::select(
        'citas.codigo_cita',
        'citas.fecha',
        'citas.hora',
        'citas.motivo',
        'paciente.nombre as paciente',
        'medico.nombre as medico',
        'especialidad.nombre as especialidad'
    )
    ->join('paciente', 'paciente.codigo_paciente', '=', 'citas.paciente')
    ->join('medico', 'medico.codigo_medico', '=', 'citas.medico')
    ->join('especialidad', 'especialidad.codico_especialidad', '=', 'citas.especialidad');

    // Filtrar por fecha si está disponible
    if (isset($data['fecha'])) {
        $query->where('citas.fecha', $data['fecha']);
    }

    // Filtrar por médico si está disponible
    if (isset($data['medico'])) {
        $query->where('citas.medico', $data['medico']);
    }

    // Obtener los resultados
    $citas = $query->get();

    // Generar el PDF
    $pdf = Pdf::loadView('/reports/citas', compact('citas')); 
    return $pdf->stream('fechaCitas.pdf');
}




    public function reporteMedicoEspecialidad() {
        $data = request()->validate([ 
            'especialidad' => 'required' // Asegúrate de validar que sea una fecha válida
        ]); 
    
        $id = $data['especialidad'];
        
        $data = medico::select( // Asegúrate de que el modelo se llame Paciente
        "medico.codigo_medico",
        "medico.nombre",
        "medico.apellido",
        "medico.telefono",
        "especialidad.nombre as especialidad"     
        )->join("especialidad", "especialidad.codico_especialidad", "=", "medico.especialidad")
        ->where("medico.especialidad", $id)
        ->get(); 
    
        // Cargar vista del reporte con la data
        $pdf = Pdf::loadView('/reports/medicos', compact('data')); 
        return $pdf->stream('EspecialidadMedico.pdf'); 
    }


    
    
}
