<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicamento extends Model
{
    use HasFactory;
    protected $table = 'medicamento';
    protected $primaryKey = 'codigo_medicamento';
    protected $fillable = ['nombre', 'fechaI','fechaV','forma', 'imagen'];
}
