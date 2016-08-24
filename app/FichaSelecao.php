<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FichaSelecao extends Model
{
   protected $table = "ficha_selecao";

    protected $fillable = [
        'nome',
        'cep',
        'estado',
        'cidade',
        'bairro',
        'endereco',
        'numero',
        'telefone',
        'identidade',
        'cpf',
        'data',
        'estado_civil',
        'grau_instrucao',
        'email',
        'escolaridade',
        'observacao_escolaridade',
        'cursos_aperfeicoamento',
        'nome_empresa',
        'end_empresa',
        'bairro_empresa',
        'cidade_empresa',
        'estado_empresa',
        'periodo_empresa',
        'cargo_empresa',
        'observacao_empresa',
        'end_empresa2',
        'bairro_empresa2',
        'cidade_empresa2',
        'estado_empresa2',
        'periodo_empresa2',
        'cargo_empresa2',
        'observacao_empresa2',
        'exp_civil',
        'sim_exp',
        'capital',
        'socio',
        'nome_socio',
        'rg_socio',
        'cpf_socio',
        'end_socio',
        'valor_socio',
        'nome_socio2',
        'rg_socio2',
        'cpf_socio2',
        'end_socio2',
        'valor_socio2',
        'conheceu_forma',
        'escolheu_inovar',
        'interesse_abertura',
        'ponto_comercial',
        'comercial_possui',
        'observacao_comercial',
    ];
}
