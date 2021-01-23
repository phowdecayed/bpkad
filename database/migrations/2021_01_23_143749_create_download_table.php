<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDownloadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('download', function (Blueprint $table) {
            $table->integer('id_download', true);
            $table->integer('id_kategori_download');
            $table->integer('id_user');
            $table->string('judul_download', 200)->nullable();
            $table->string('jenis_download', 20);
            $table->text('isi')->nullable();
            $table->string('gambar');
            $table->string('website')->nullable();
            $table->integer('hits');
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
        Schema::dropIfExists('download');
    }
}
