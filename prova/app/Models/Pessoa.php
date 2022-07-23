<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
    protected $table = 'perfis';
    protected $fillable = [
        'cpf',
        'nome',
        'data_nascimento',
        'email',
        'telefone',
        'resumo'
    ];
}
