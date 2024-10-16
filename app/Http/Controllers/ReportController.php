<?php

namespace App\Http\Controllers;
use App\Models\pacientes;
use App\Models\User;
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
    Public function reporteSeis() 
    { 
    $data = user::select( 
        'name',
        'email'
        )->get();

        $pdf = Pdf::loadView('/reports/usuarios', compact('data')); 
        return $pdf->stream('usuarios.pdf'); 
    }
}
