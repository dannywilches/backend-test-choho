<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $fillable = [
        'usuario',
        'contrasena',
        'rol_usuario',
        'activo',
        'email',
        'created_at',
        'updated_at',
    ];
}
