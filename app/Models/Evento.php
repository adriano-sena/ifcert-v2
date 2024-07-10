<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'subTitulo',
        'slug',
        'descricao',
        'imagem',
        'local',
        'data_inicio',
        'data_fim',
        'organizador',
        'telefone'
    ];
}
