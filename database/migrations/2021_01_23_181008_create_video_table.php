<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video', function (Blueprint $table) {
            $table->integer('id_video', true);
            $table->string('judul', 200);
            $table->string('posisi', 20);
            $table->text('keterangan')->nullable();
            $table->text('video');
            $table->integer('urutan')->nullable();
            $table->string('bahasa', 20);
            $table->string('gambar')->nullable();
            $table->integer('id_user');
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
        Schema::dropIfExists('video');
    }
}
