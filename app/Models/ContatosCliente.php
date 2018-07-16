<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContatosCliente extends Model
{
    protected $fillable = ['TipoContato', 'DescContato', 'BolAtivo'];
}
