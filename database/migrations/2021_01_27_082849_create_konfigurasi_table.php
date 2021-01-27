<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonfigurasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konfigurasi', function (Blueprint $table) {
            $table->integer('id_konfigurasi', true);
            $table->string('namaweb', 200);
            $table->string('nama_singkat', 200)->nullable();
            $table->string('tagline', 200)->nullable();
            $table->string('tagline2')->nullable();
            $table->text('tentang')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('email_cadangan')->nullable();
            $table->text('alamat')->nullable();
            $table->string('telepon', 50)->nullable();
            $table->string('hp', 50)->nullable();
            $table->string('fax', 50)->nullable();
            $table->string('logo')->nullable();
            $table->string('icon')->nullable();
            $table->string('keywords', 400)->nullable();
            $table->text('metatext')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('google_plus')->nullable();
            $table->string('nama_facebook');
            $table->string('nama_twitter');
            $table->string('nama_instagram');
            $table->string('nama_google_plus');
            $table->string('singkatan');
            $table->text('google_map')->nullable();
            $table->string('gambar')->nullable();
            $table->string('video')->nullable();
            $table->string('gambar_berita')->nullable();
            $table->string('protocol')->nullable();
            $table->string('smtp_host')->nullable();
            $table->string('smtp_port')->nullable();
            $table->string('smtp_timeout')->nullable();
            $table->string('smtp_user')->nullable();
            $table->string('smtp_pass')->nullable();
            $table->string('twitter_feeds')->nullable();
            $table->string('text_bawah_peta')->nullable();
            $table->integer('id_user')->nullable();
            $table->timestamp('tanggal')->useCurrent();
            $table->string('nama_youtube')->nullable()->default('NULL');
            $table->string('youtube')->nullable()->default('NULL');
            $table->text('facebook_page')->nullable()->default('NULL');
            $table->string('disqus_shortname')->nullable()->default('bpkad-jabarprov-go-id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konfigurasi');
    }
}
