<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('category_passions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            // $table->commonFields();
        });

        Schema::create('passions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('category_id');
            $table->tinyText('summary')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
            // $table->commonFields();
        });

        Schema::create('detail_passions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('passion_id')->constrained('passions')->onDelete('cascade');
            $table->unsignedBigInteger('sort');
            $table->string('key');
            $table->string('value');
            $table->timestamps();
            // $table->commonFields();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_passions');
        Schema::dropIfExists('passions');
        Schema::dropIfExists('category_passions');
    }
};
