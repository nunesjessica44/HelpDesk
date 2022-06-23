<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormularioModel extends Model
{
    use HasFactory;

    public $table = "chamado"; //nome da tabela a var deve ter o nome $table

    public $timestamps=false;

    protected $fillable = [	'rm','email','ocorrencias','turma','datahora','status','idChamado','catChamados'];
}









// 
