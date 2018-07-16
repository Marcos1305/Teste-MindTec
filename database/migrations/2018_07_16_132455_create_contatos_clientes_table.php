<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatosClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatos_clientes', function (Blueprint $table) {
            $table->increments('idContato');
            $table->integer('idCliente')->unsigned();
            $table->string('TipoContato');
            $table->string('DescContato');
            $table->integer('BolAtivo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contatos_clientes');
    }
}
