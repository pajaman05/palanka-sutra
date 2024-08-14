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
        // Create 'kategorijas' table
        Schema::create('kategorijas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("slug")->unique();
            $table->text('opis');
        });

        // Create 'vests' table
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
            $table->unsignedBigInteger('kategorija_id');  // Change to unsignedBigInteger
            $table->unsignedBigInteger('user_id');        // Change to unsignedBigInteger
            $table->boolean('published');
            $table->boolean('accepted')->nullable();
            $table->foreign('kategorija_id')->references('id')->on('kategorijas');
            $table->foreign('user_id')->references('id')->on('users');
        });

        // Create 'komentars' table
        Schema::create('komentars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('datum');
            $table->text('sadrzaj');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('vest_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('vest_id')->references('id')->on('vests');
        });

        // Create 'diskusijas' table
        Schema::create('diskusijas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('datum');
            $table->text('sadrzaj');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentars');
        Schema::dropIfExists('vests');
        Schema::dropIfExists('diskusijas');
        Schema::dropIfExists('kategorijas');
        Schema::dropIfExists('users');
    }
};
