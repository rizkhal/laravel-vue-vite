<?php

use App\Enums\StudentQuranAbility;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bacaan_quran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_identitas_sekolah')->constrained('rb_identitas_sekolah')->onDelete('cascade');
            $table->foreignId('id_siswa')->constrained('rb_siswa')->onDelete('cascade');
            $table->foreignId('id_guru')->constrained('rb_guru')->onDelete('cascade');
            $table->foreignId('id_kelas')->constrained('rb_kelas')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('bacaan_quran_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bacaan_quran_id')->constrained('bacaan_quran')->onDelete('cascade');
            // ...
            $table->unsignedBigInteger('nomor_surah');
            $table->unsignedBigInteger('nomor_ayah_dari');
            $table->unsignedBigInteger('nomor_ayah_sampai');
            $table->tinyInteger('kemampuan')->nullable()->comment(StudentQuranAbility::class);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bacaan_quran_details');
        Schema::dropIfExists('bacaan_quran');
    }
};
