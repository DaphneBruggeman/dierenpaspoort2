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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();

            $table->string('naam');
            $table->date('geboortedatum')->nullable();

            $table->string('soort');
            $table->string('geslacht')->nullable();
            $table->string('kleur')->nullable();
            $table->string('locatie')->nullable();

            $table->text('eten')->nullable();
            $table->text('weetje')->nullable();

            $table->string('foto')->nullable();

            $table->string('qr_code')->unique();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
