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
        Schema::table('article_combination', function (Blueprint $table) {
            $table->foreign(['art_article_id'], 'fk_article_combination2')->references(['id'])->on('articles');
            $table->foreign(['article_id'], 'fk_article_combination')->references(['id'])->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article_combination', function (Blueprint $table) {
            $table->dropForeign('fk_article_combination2');
            $table->dropForeign('fk_article_combination');
        });
    }
};
