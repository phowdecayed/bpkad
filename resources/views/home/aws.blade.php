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
            <div class="col-lg-15">
               <div class="about-text">
                  <h2>{{ $site_config->nama_singkat }}</h2>
                  <?php echo $site_config->tentang ?>

               </div>
            </div>
         </div>
      </div>
   </div>
   <!--About Txt Video End-->
<div class="clearfix"><br><br></div>
