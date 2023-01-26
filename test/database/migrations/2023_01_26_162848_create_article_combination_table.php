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
        Schema::create('article_combination', function (Blueprint $table) {
            $table->comment('');
            $table->smallInteger('id')->primary();
            $table->smallInteger('article_id');
            $table->smallInteger('art_article_id')->index('fk_article_combination2');

            $table->unique(['article_id', 'art_article_id'], 'article_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_combination');
    }
};
