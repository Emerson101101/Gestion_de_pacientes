<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pacientes extends Model
{
    use HasFactory;
    
    protected $table = 'paciente';
    protected $primaryKey = 'codigo_paciente';
    protected $fillable = ['nombre', 'edad','telefono','direccion', 'detallesconsulta'];
}
