<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->integer('id_berita', true);
            $table->integer('id_user');
            $table->integer('id_kategori')->nullable()->default(0);
            $table->enum('bahasa', ['ID', 'EN']);
            $table->string('updater', 32)->nullable()->default('-');
            $table->string('slug_berita');
            $table->string('judul_berita');
            $table->text('isi');
            $table->string('status_berita', 20);
            $table->string('jenis_berita', 20)->nullable()->default('Berita');
            $table->text('keywords')->nullable()->default('');
            $table->string('gambar')->nullable();
            $table->string('icon')->nullable();
            $table->integer('hits')->nullable();
            $table->integer('urutan')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->dateTime('tanggal_post');
            $table->dateTime('tanggal_publish');
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
        Schema::dropIfExists('berita');
    }
}
