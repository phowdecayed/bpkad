<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriDownloadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_download', function (Blueprint $table) {
            $table->integer('id_kategori_download', true);
            $table->enum('bahasa', ['ID', 'EN']);
            $table->string('slug_kategori_download');
            $table->string('nama_kategori_download');
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('kategori_download');
    }
}
