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
        Schema::create('permission_profil', function (Blueprint $table) {
            $table->comment('');
            $table->smallInteger('id')->primary();
            $table->smallInteger('profile_id');
            $table->smallInteger('permission_id')->index('fk_permission_profil2');

            $table->unique(['profile_id', 'permission_id'], 'profile_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission_profil');
    }
};
