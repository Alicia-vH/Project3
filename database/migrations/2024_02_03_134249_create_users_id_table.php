<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pizza', function (Blueprint $table){
            $table->unsignedBigInteger('users_id')->nullable();
            $table->foreign('users_id')->references('id')->on('users');
        });

        Schema::table('bestelling', function (Blueprint $table){
            $table->unsignedBigInteger('users_id')->nullable();
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pizza', function (Blueprint $table){
            $table->dropForeign(['users_id']);
            $table->dropColumn('users_id');
        });

        Schema::table('bestelling', function (Blueprint $table){
            $table->dropForeign(['users_id']);
            $table->dropColumn('users_id');
        });
    }
};
