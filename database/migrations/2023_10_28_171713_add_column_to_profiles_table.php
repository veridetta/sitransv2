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
        Schema::table('profiles', function (Blueprint $table) {
            //facebook, twitter, instagram, youtube, link gmaps
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->text('youtube')->nullable();
            $table->text('gmaps')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profiles', function (Blueprint $table) {
            //facebook, twitter, instagram, youtube, link gmaps
            $table->dropColumn('facebook');
            $table->dropColumn('twitter');
            $table->dropColumn('instagram');
            $table->dropColumn('youtube');
            $table->dropColumn('gmaps');

        });
    }
};