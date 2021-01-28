<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heading', function (Blueprint $table) {
            $table->integer('id_heading', true);
            $table->integer('id_user')->nullable()->default(0);
            $table->string('judul_heading')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('gambar')->nullable();
            $table->string('halaman')->nullable()->default('NULL');
            $table->timestamp('tanggal')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heading');
    }
}
