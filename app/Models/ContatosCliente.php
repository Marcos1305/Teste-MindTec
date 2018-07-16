<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContatosCliente extends Model
{
    protected $primaryKey = 'idContato';
    protected $fillable = ['TipoContato', 'DescContato', 'BolAtivo'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'idCliente', 'idCliente');
    }
}
