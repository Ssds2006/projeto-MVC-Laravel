<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dividas', function (Blueprint $table) {
            $table->id();

            //-- FORMA DE DECLARAR CHAVE ESTRANGEIRA
            //$table->unsignedBigInteger('cliente_id');
            //$table->foreign('cliente_id')->references('id')->on('clientes');
            //----------------------------------------------
            // -- MELHOR FORMA DE DECLARAR CHAVE ESTRANGEIRA
            //onDelete('cascade'): assim que o cliente for deletado ... as dividas também serão excluidas

            $table->foreignId('cliente_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('fornecedor_id');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
            $table->date('data_do_debito');
            $table->unsignedDecimal('valor_da_divida',10,2);
            $table->date('data_de_vencimento');
            $table->unsignedDecimal('valor_do_acordo',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dividas');
    }
};
