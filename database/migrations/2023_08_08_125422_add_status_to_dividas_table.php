<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('dividas', function (Blueprint $table) {
            $table->enum('status', ['pendente', 'em_negociacao', 'quitado'])
                ->default('pendente')
                ->after('valor_do_acordo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('dividas', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
