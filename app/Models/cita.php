<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    use HasFactory;
    
    protected $table = 'citas';
    protected $primaryKey = 'codigo_cita';
    protected $fillable = ['paciente', 'medico','especialidad','fecha','hora','motivo'];
}
