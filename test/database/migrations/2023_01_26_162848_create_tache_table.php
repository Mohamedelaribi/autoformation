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
        Schema::create('tache', function (Blueprint $table) {
            $table->comment('');
            $table->smallInteger('id')->primary();
            $table->smallInteger('utilsateur_id');
            $table->smallInteger('uti_utilsateur_id')->index('fk_tache2');
            $table->smallInteger('vehicule_id')->index('fk_tache3');
            $table->smallInteger('imgtache_id')->index('fk_tache4');
            $table->smallInteger('catache_id')->index('fk_tache5');
            $table->timestamp('date_affectation')->useCurrentOnUpdate()->useCurrent();
            $table->dateTime('date_previsionnelle_debut')->nullable();
            $table->dateTime('date_previsionnelle_fin')->nullable();
            $table->dateTime('date_debut_realisation')->nullable();
            $table->dateTime('date_fin_realisation')->nullable();
            $table->boolean('annulee')->nullable();
            $table->boolean('reportee')->nullable();
            $table->string('observation', 1200)->nullable();

            $table->unique(['utilsateur_id', 'uti_utilsateur_id', 'vehicule_id', 'imgtache_id', 'catache_id'], 'utilsateur_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tache');
    }
};
