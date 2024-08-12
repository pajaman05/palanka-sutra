<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('naslov', 100);
            $table->string('slug')->unique();
            $table->date('datum');
            $table->text('sazetak');
            $table->text('sadrzaj');
            $table->string('image_thumbnail', 200);
            $table->string('image_full', 200);
            $table->unsignedInteger('kategorija_id');
            $table->unsignedInteger('user_id');
            $table->boolean('published');
            $table->boolean('accepted')->nullable();
            $table->foreign('kategorija_id')->references('id')->on('kategorijas');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vests');
    }
};
