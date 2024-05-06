<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $table = 'Pessoa';

    public $timestamps = false;

    protected $fillable = [
        'apelido',
        'email',
        'data_nascimento',
        'sexo' , // Assuming 'M' for male, 'F' for female
        'cor_raca',
        'nacionalidade',
        'uf_naturalidade' ,
        'naturalidade' ,
        'ci_numero' ,
        'ci_orgao_emissor' ,
        'ci_uf',
        'ci_data_emissao',
        'cpf',
        'pis_pasep',
        'titulo_eleitoral_numero',
        'zona_eleitoral',
        'secao_eleitoral',
        'estado_civil',
        'nome_conjuge',
        'nome_pai',
        'nome_mae'
    ];

}
