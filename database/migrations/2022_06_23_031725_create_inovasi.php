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
        Schema::create('inovasi', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('username', 50)->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('organisasi');
            $table->string('name');
            $table->string('phone');
            $table->string('sosmed');
            $table->enum('kategori', ['pendidikan', 'kesehatan', 'energi', 'kelautan', 'industri',
            'pembangunan', 'rekayasa', 'sosial', 'agribisnis', 'teknologi'] );
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inovasi');
    }
};
