<?php
use Illuminate\Support\Facades\DB;
use App\Models\Nav_model;
$site_config = DB::table('konfigurasi')->first();
// Nav profil
$myprofil    = new Nav_model();
$nav_profil  = $myprofil->nav_profil();
$nav_layanan = $myprofil->nav_layanan();
$nav_berita  = $myprofil->nav_berita();
$nav_terjadi  = $myprofil->nav_terjadi();
$nav_materi  = $myprofil->nav_materi();
?>

<!-- Primary Menu -->
<div class="module menu left">
    <ul id="nav-primary" class="nav nav-primary">
        <li class="nav"><a href="{{ asset('/') }}">Beranda</a>
        </li>
        <li class="has-dropdown">
            <a href="#" role="button"> Profil Organisasi </a>
            <ul>
                <li><a href="{{ asset('tentang') }}"> Struktur Organisasi </a></li>
            </ul>
        <li class="has-dropdown">
            <a href="#" role="button"> Pojok Media </a>
            <ul>
                <?php foreach($nav_berita as $nav_berita) { ?>
                <li><a href="{{ asset('berita/kategori/'.$nav_berita->slug_kategori) }}">
                        {{ Str::words($nav_berita->nama_kategori,4) }}</a></li>
                <?php } ?>
            </ul>
        </li>
        <li class="has-dropdown">
            <a href="#" role="button"> Produk Hukum </a>
            <ul>
                <?php foreach($nav_layanan as $nav_layanan) { ?>
                <li><a href="{{ asset('berita/layanan/'.$nav_layanan->slug_berita) }}">
                        {{ Str::words($nav_layanan->judul_berita,6) }}</a></li>
                <?php } ?>
            </ul>
        </li>
        <li class="has-dropdown">
            <a href="#" role="button"> Download </a>
            <ul>
                <?php foreach($nav_materi as $nav_materi) { ?>
                <li><a
                        href="{{ asset('download/kategori/'.$nav_materi->slug_kategori_download) }}">
                        {{ Str::words($nav_materi->nama_kategori_download,6) }}</a></li>
                <?php } ?>
                <li><a href="{{ asset('download') }}">Lihat Semua Data</a></li>
            </ul>
        </li>
        <li class="nav"> <a href="{{ asset('video') }}">Video</a>
        </li>
        <li class="nav"> <a href="{{ asset('galeri') }}">Galeri</a>
        </li>
        <li class="nav"> <a href="{{ asset('kontak') }}">Kontak</a>
        </li>

    </ul>
       <!-- Menu Toggle -->
       <div class="menu-toggle">
        <a href="#" data-toggle="mobile-menu" class="mobile-trigger"><span><span></span></span></a>
    </div>
    </nav>
    </header>
    <!--Header End-->
