<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receta extends Model
{
    use HasFactory;
    protected $table = 'recetas';
    protected $primaryKey = 'codigo_receta';
    protected $fillable = ['medicamento', 'horario','fecha','dias', 'dosis'];
}
