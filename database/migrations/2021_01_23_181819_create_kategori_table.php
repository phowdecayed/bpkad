<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori', function (Blueprint $table) {
            $table->integer('id_kategori', true);
            $table->integer('id_user');
            $table->enum('bahasa', ['ID', 'EN']);
            $table->string('slug_kategori');
            $table->string('nama_kategori')->unique('nama_kategori');
            $table->integer('urutan')->nullable();
            $table->integer('hits')->nullable();
            $table->timestamp('tanggal')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori');
    }
}
