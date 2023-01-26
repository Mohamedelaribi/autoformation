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
        Schema::table('tache', function (Blueprint $table) {
            $table->foreign(['uti_utilsateur_id'], 'fk_tache2')->references(['id'])->on('utilisateurs');
            $table->foreign(['imgtache_id'], 'fk_tache4')->references(['id'])->on('imgtaches');
            $table->foreign(['utilsateur_id'], 'fk_tache')->references(['id'])->on('utilisateurs');
            $table->foreign(['vehicule_id'], 'fk_tache3')->references(['id'])->on('vehicules');
            $table->foreign(['catache_id'], 'fk_tache5')->references(['id'])->on('cataches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tache', function (Blueprint $table) {
            $table->dropForeign('fk_tache2');
            $table->dropForeign('fk_tache4');
            $table->dropForeign('fk_tache');
            $table->dropForeign('fk_tache3');
            $table->dropForeign('fk_tache5');
        });
    }
};
