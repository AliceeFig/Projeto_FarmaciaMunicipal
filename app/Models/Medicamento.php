<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Medicamento extends Model
{
    use HasFactory;

    protected $table = 'medicamentos';

    protected $fillable = [
        'imagem',
        'nome', 
        'dosagem', 
        'quantidade_em_estoque', 
        'descricao', 
        'data_validade',
        'categoria', 
        'criado_em'];
}
