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
<div id="primary-menu-trigger">
    <svg class="svg-trigger" viewBox="0 0 100 100">
        <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
        </path>
        <path d="m 30,50 h 40"></path>
        <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
    </svg>
</div>

<nav class="primary-menu with-arrows">

    <ul class="menu-container">
        <li class="menu-item">
            <a class="menu-link" href="{{ asset('/') }}">
                <div>Beranda</div>
            </a>
        </li>
        <li class="menu-item">
            <a class="menu-link" href="#">
                <div>Profil & Organisasi</div>
            </a>
            <ul class="sub-menu-container">
                <li class="menu-item">
                    <a class="menu-link" href="{{ asset('tentang') }}">
                        <div><i class="icon-line-users"></i>Struktur Organisasi</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a class="menu-link" href="#">
                <div>Pojok Media</div>
            </a>
            <ul class="sub-menu-container">
                <?php foreach($nav_berita as $nav_berita) { ?>
                <li class="menu-item">
                    <a class="menu-link" href="{{ asset('berita/kategori/'.$nav_berita->slug_kategori) }}">
                        <div><i class="icon-news"></i>
                            {{ Str::words($nav_berita->nama_kategori,4) }}</div>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </li>
        <!-- <li class="menu-item">
            <a class="menu-link" href="#">
                <div>Produk Hukum</div>
            </a>
            <ul class="sub-menu-container">
                <?php foreach($nav_layanan as $nav_layanan) { ?>
                <li class="menu-item">
                    <a class="menu-link" href="{{ asset('berita/layanan/'.$nav_layanan->slug_berita) }}">
                        <div><i class="icon-news"></i>
                            {{ Str::words($nav_layanan->judul_berita,4) }}</div>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </li> -->
        <li class="menu-item">
            <a class="menu-link" href="#">
                <div>PPID</div>
            </a>
            <ul class="sub-menu-container">
                <?php foreach($nav_materi as $nav_materi) { ?>
                <li class="menu-item">
                    <a class="menu-link" href="{{ asset('download/kategori/'.$nav_materi->slug_kategori_download) }}">
                        <div><i class="icon-file-download"></i>
                            {{ Str::words($nav_materi->nama_kategori_download,6) }}</div>
                    </a>
                    <?php } ?>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="{{ asset('download') }}">
                        <div><i class="icon-download"></i>Semua Data</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a class="menu-link" href="#">
                <div>Galeri</div>
            </a>
            <ul class="sub-menu-container">
                <li class="menu-item">
                    <a class="menu-link" href="{{ asset('galeri') }}">
                        <div><i class="icon-photo"></i>Galeri Foto</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="{{ asset('video') }}">
                        <div><i class="icon-video1"></i>Galeri Video</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a class="menu-link" href="{{ asset('kontak') }}">
                <div>Kontak</div>
            </a>
        </li>
        <!-- Top Search
		============================================= -->
		<div id="top-search" class="header-misc-icon">
		<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
		</div><!-- #top-search end -->
    </ul>
</nav>
<form class="top-search-form" action="search.html" method="get">
    <input type="text" name="q" class="form-control" value="" placeholder="Ketik &amp; Tekan Enter.." autocomplete="off">
</form>
</div>
</div>
</div>
<div class="header-wrap-clone"></div>
</header>
<!--Header End-->
