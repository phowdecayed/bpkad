<?php
$bg   = DB::table('heading')->where('halaman','Kontak')->orderBy('id_heading','DESC')->first();
 ?>
<!--Inner Header Start-->
<section id="page-title" class="page-title-parallax page-title-dark include-header" style="padding: 100px 0; background-image: url('{{ asset('assets/upload/image/'.$bg->gambar) }}'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <h1 data-animate="fadeInUp">Kontak</h1>
        <span data-animate="fadeInUp" data-delay="300">Badan Pengelolaan Keuangan dan Aset Daerah</span>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Beranda</a></li>
          <li class="breadcrumb-item active" aria-current="page">Kontak</li>
      </ol>
     </div>
</section>
<!--Inner Header End-->
<!--Contact Start-->
<section class="gmap slider-parallax vh-100">
    <?php echo $site_config->google_map ?>
</section>
<section id="content">
    <div class="content-wrap">
        <div class="container">
            <div class="row gutter-40 col-mb-80">
                <!-- Postcontent
                ============================================= -->
                <div class="postcontent col-lg-9">
                    <div class="form-widget">
                        <iframe src="https://www.powr.io/poll/u/5760816a_1611115094#platform=iframe" style="width:100%;" height="471px" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact End-->
