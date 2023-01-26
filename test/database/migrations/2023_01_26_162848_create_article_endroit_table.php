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
        Schema::create('article_endroit', function (Blueprint $table) {
            $table->comment('');
            $table->smallInteger('id')->primary();
            $table->smallInteger('article_id');
            $table->smallInteger('endroit_id')->index('fk_article_endroit2');
            $table->dateTime('date_entree')->nullable();
            $table->dateTime('date_sortie')->nullable();

            $table->unique(['article_id', 'endroit_id'], 'article_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_endroit');
    }
};
