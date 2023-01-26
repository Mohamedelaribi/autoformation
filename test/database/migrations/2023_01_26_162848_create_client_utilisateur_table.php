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
        Schema::create('client_utilisateur', function (Blueprint $table) {
            $table->comment('');
            $table->smallInteger('id')->primary();
            $table->smallInteger('utilsateur_id');
            $table->smallInteger('client_id')->index('fk_client_utilisateur2');
            $table->timestamp('date_besoin')->useCurrentOnUpdate()->useCurrent();
            $table->string('besoin', 1200)->nullable();

            $table->unique(['utilsateur_id', 'client_id'], 'utilsateur_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_utilisateur');
    }
};
