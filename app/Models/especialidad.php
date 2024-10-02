<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class especialidad extends Model
{
    use HasFactory;
    protected $table = 'especialidad';
    protected $primaryKey = 'codico_especialidad';
    protected $fillable = ['nombre'];
}
