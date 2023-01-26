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
        Schema::table('article_endroit', function (Blueprint $table) {
            $table->foreign(['endroit_id'], 'fk_article_endroit2')->references(['id'])->on('endroits');
            $table->foreign(['article_id'], 'fk_article_endroit')->references(['id'])->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article_endroit', function (Blueprint $table) {
            $table->dropForeign('fk_article_endroit2');
            $table->dropForeign('fk_article_endroit');
        });
    }
};
