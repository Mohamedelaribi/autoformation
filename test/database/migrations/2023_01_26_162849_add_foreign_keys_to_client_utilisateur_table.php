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
        Schema::table('client_utilisateur', function (Blueprint $table) {
            $table->foreign(['client_id'], 'fk_client_utilisateur2')->references(['id'])->on('clients');
            $table->foreign(['utilsateur_id'], 'fk_client_utilisateur')->references(['id'])->on('utilisateurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client_utilisateur', function (Blueprint $table) {
            $table->dropForeign('fk_client_utilisateur2');
            $table->dropForeign('fk_client_utilisateur');
        });
    }
};
