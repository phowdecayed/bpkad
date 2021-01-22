<?php
$bg   = DB::table('heading')->where('halaman','Berita')->orderBy('id_heading','DESC')->first();
$site_config = DB::table('konfigurasi')->first();
 ?>
<!--Inner Header Start-->
<section id="page-title" class="page-title-parallax page-title-dark include-header" style="padding: 100px 0; background-image: url('{{ asset('assets/upload/image/'.$bg->gambar) }}'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <h1>{{ $title }}</h1>
        <span></span>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Beranda</a></li>
          <li class="breadcrumb-item"><a href="#">Produk Hukum</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
      </ol>
     </div>
</section>
<!--Inner Header End-->
<!--About Start-->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="row grid-container gutter-30">
                <div class="entry col-12">
                    <div class="grid-inner">
                        <div class="entry-content">
                        <?php echo $berita->isi ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


