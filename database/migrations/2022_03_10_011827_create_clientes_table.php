<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 70)->nullable();
            $table->string('endereco',70)->nullable();
            $table->string('bairro',30)->nullable();
            $table->string('cidade',30)->nullable();
            $table->string('uf',2)->nullable();
            $table->string('CEP',12)->nullable();
            $table->string('CPF',16)->unique();
            $table->string('telefone',16)->nullable();
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
        Schema::dropIfExists('clientes');
    }
};
