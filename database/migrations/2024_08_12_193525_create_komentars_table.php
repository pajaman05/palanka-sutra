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
        Schema::create('komentars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('sadrzaj');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('vest_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('vest_id')->references('id')->on('vests');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentars');
    }
};
