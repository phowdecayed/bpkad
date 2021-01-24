<?php
$bg   = DB::table('heading')->where('halaman','Tentang')->orderBy('id_heading','DESC')->first();
 ?>
<!--Inner Header Start-->
<section id="page-title" class="page-title-parallax page-title-dark include-header" style="padding: 100px 0; background-image: url('{{ asset('assets/upload/image/'.$bg->gambar) }}'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
      <h1 data-animate="fadeInUp">Profil Organisasi</h1>
      <span data-animate="fadeInUp" data-delay="300">{{ $site_config->nama_singkat }}</span>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
        <li class="breadcrumb-item"><a href="#">Profil Organisasi</a></li>
        <li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
    </ol>
   </div>
</section>
<!--Inner Header End-->
<!--About Start-->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row col-mb-50 mb-0">
                <div class="col-lg-15">
                    <?php echo $site_config->tentang ?>
                </div>
            </div>
        </div>
    </div>
</section>
