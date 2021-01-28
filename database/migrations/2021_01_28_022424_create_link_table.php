<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link', function (Blueprint $table) {
            $table->integer('id_link', true);
            $table->integer('id_kategori_link')->nullable()->default(1);
            $table->integer('id_user');
            $table->string('judul_link', 200)->nullable();
            $table->string('jenis_galeri', 20)->nullable();
            $table->text('isi')->nullable();
            $table->string('gambar');
            $table->string('website')->nullable();
            $table->integer('hits')->nullable();
            $table->enum('popup_status', ['Publish', 'Draft', '', ''])->nullable();
            $table->integer('urutan')->nullable();
            $table->enum('status_text', ['Ya', 'Tidak', '', ''])->nullable();
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
        Schema::dropIfExists('link');
    }
}
