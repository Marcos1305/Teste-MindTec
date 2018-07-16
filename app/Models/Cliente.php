<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $primaryKey = 'idCliente';
    protected $fillable   = ['RazaoSocial', 'DataCadastro', 'BolAtivo'];
    public function contato()
    {
        return $this->hasOne(ContatosCliente::class, 'idCliente', 'idCliente');
    }
}
