<?php
$bg   = DB::table('heading')->where('halaman','AWS')->orderBy('id_heading','DESC')->first();
 ?>
<!--Inner Header Start-->
<section class="wf100 p80 inner-header" style="background-image: url('{{ asset('assets/upload/image/'.$bg->gambar) }}'); background-position: bottom center;">
   <div class="container">
      <h1>{{ $title }}</h1>
   </div>
</section>
<!--Inner Header End-->
<!--About Start-->
<section class="wf100 about">
   <!--About Txt Video Start-->
   <div class="about-video-section wf100">
      <div class="container">
         <div class="row">
            <div class="col-lg-7">
               <div class="about-text">
                  <h2>{{ $site_config->nama_singkat }}</h2>
                  <?php echo $site_config->tentang ?>

               </div>
            </div>
            <div class="col-lg-5">
               <a href="#"><img src="{{ asset('assets/upload/image/'.$site_config->gambar) }}" alt="{{ $site_config->nama_singkat }}" class="img img-fluid img-thumbnail"></a>
            </div>
         </div>
      </div>
   </div>
   <!--About Txt Video End-->
<?php
$bg2   = DB::table('heading')->where('halaman','Team')->orderBy('id_heading','DESC')->first();
 ?>
<!--Inner Header Start-->
<section class="wf100 p100 inner-header" style="background-image: url('{{ asset('assets/upload/image/'.$bg2->gambar) }}'); background-position: bottom center;">
   <div class="container text-center">
      <h1>{{ $bg2->judul_heading }}</h1>
   </div>
</section>
   <!--Causes Start-->
<!--Causes End-->

<!--Service Area Start-->
 <section class="donation-join wf100 p80">
   <div class="container text-center">
      <p><br><br></p>
      <h3>Layanan {{ website('namaweb') }}</h3>
      <hr>
      <div class="row">
         <?php foreach($layanan as $layanan) { ?>
            <div class="col-md-4 col-sm-6">
               <div class="volbox">
                  <img src="{{ asset('assets/upload/image/thumbs/'.$layanan->gambar) }}" alt="{{ $layanan->judul_berita }}" class="img img-thumbnail img-fluid">
                  <h6>{{ $layanan->judul_berita }}</h6>
                  <p>{{ $layanan->keywords }}</p>
                  <a href="{{ asset('layanan/'.$layanan->slug_berita) }}">Lihat detail</a>
               </div>
            </div>
            <!--box  end-->
         <?php } ?>
      </div>
   </div>
</div>
<br><br>
</section>
<div class="clearfix"><br><br></div>
