<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriGaleriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_galeri', function (Blueprint $table) {
            $table->integer('id_kategori_galeri', true);
            $table->enum('bahasa', ['ID', 'EN']);
            $table->string('slug_kategori_galeri');
            $table->string('nama_kategori_galeri');
            $table->integer('urutan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori_galeri');
    }
}
