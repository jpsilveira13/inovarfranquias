<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    protected $table = "mensagem";

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'celular',
        'estado',
        'cidade',
        'capital',
        'mensagem'
    ];
}
