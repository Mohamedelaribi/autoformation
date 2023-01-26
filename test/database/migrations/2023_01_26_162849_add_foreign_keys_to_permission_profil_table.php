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
        Schema::table('permission_profil', function (Blueprint $table) {
            $table->foreign(['permission_id'], 'fk_permission_profil2')->references(['id'])->on('permisssions');
            $table->foreign(['profile_id'], 'fk_permission_profil')->references(['id'])->on('profils');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permission_profil', function (Blueprint $table) {
            $table->dropForeign('fk_permission_profil2');
            $table->dropForeign('fk_permission_profil');
        });
    }
};
