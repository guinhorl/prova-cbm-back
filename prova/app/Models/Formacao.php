<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formacao extends Model
{
    use HasFactory;
    protected $table = 'formacao';
    protected $fillable = [
        'instituicao_id',
        'perfil_id',
        'nome'
    ];
}
