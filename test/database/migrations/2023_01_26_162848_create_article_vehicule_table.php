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
        Schema::create('article_vehicule', function (Blueprint $table) {
            $table->comment('');
            $table->smallInteger('id')->primary();
            $table->smallInteger('article_id');
            $table->smallInteger('vehicule_id')->index('fk_article_vehicule2');
            $table->dateTime('date_integration')->nullable();

            $table->unique(['article_id', 'vehicule_id'], 'article_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_vehicule');
    }
};
