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
        Schema::table('article_vehicule', function (Blueprint $table) {
            $table->foreign(['vehicule_id'], 'fk_article_vehicule2')->references(['id'])->on('vehicules');
            $table->foreign(['article_id'], 'fk_article_vehicule')->references(['id'])->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article_vehicule', function (Blueprint $table) {
            $table->dropForeign('fk_article_vehicule2');
            $table->dropForeign('fk_article_vehicule');
        });
    }
};
