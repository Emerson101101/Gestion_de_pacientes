<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medico extends Model
{
    use HasFactory;
    
    protected $table = 'medico';
    protected $primaryKey = 'codigo_medico';
    protected $fillable = ['nombre', 'apellido','especialidad','telefono'];
}