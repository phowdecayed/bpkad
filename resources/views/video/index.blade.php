<?php
$bg   = DB::table('heading')->where('halaman','Berita')->orderBy('id_heading','DESC')->first();
$site_config = DB::table('konfigurasi')->first();
 ?>
<!--Inner Header Start-->
<section id="page-title" class="page-title-parallax page-title-dark include-header" style="padding: 100px 0; background-image: url('{{ asset('assets/upload/image/'.$bg->gambar) }}'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
    <h1 data-animate="fadeInUp">Galeri Video</h1>
      <span data-animate="fadeInUp" data-delay="300">Badan Pengelolaan Keuangan dan Aset Daerah</span>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
        <li class="breadcrumb-item"><a href="#">Galeri</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
    </ol>
   </div>
</section>
<!--Inner Header End-->
<!--About Start-->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="portfolio" class="portfolio row grid-container gutter-30" data-layout="fitRows">
                <?php foreach($videos as $video) { ?>
                    <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-media pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $video->video }}" allowfullscreen></iframe>
                            <br>
                            <div class="heading-block center">
                                <h1><?php echo $video->judul ?></h1>
                                <span></span>
                            </div>
							<div class="divider"><i class="icon-circle"></i></div>
                            </div>
                        </div>
                    </article>
                    <?php } ?>
            </div>
            <div class="pagination justify-content-center">
                {{ $videos->links() }}
            </div>
        </div>
    </div>
</section>
<!--Blog End-->
