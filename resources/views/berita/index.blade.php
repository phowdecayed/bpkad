<?php
use Illuminate\Support\Facades\DB;
use App\Models\Berita_model;
$model 	= new Berita_model();
$berita = $model->listing();
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
        <li class="breadcrumb-item"><a href="#">Pojok Media</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
    </ol>
   </div>
</section>
<!--Inner Header End-->
<!--Blog Start-->
<section class="wf100 p80 blog">
   <div class="blog-grid">
      <div class="container">
         <div class="row">
            <?php foreach($berita as $berita) { ?>
            <!--Blog Small Post Start-->
            <div class="col-md-6 col-sm-12">
               <div class="blog-post">
                  <div class="blog-thumb"> <a href="{{ asset('berita/read/'.$berita->slug_berita) }}"><i class="fas fa-link"></i></a> <img src="{{ asset('assets/upload/image/thumbs/'.$berita->gambar) }}" alt="><?php  echo $berita->judul_berita ?>"> </div>
                  <div class="post-txt">
                     <h5><a href="{{ asset('berita/read/'.$berita->slug_berita) }}"><?php  echo $berita->judul_berita ?></a></h5>
                     <ul class="post-meta">
                        <li> <a href="{{ asset('berita/read/'.$berita->slug_berita) }}"><i class="fas fa-calendar-alt"></i> {{ tanggal('tanggal_id',$berita->tanggal_post)}}</a> </li>
                        <li> <a href="{{ asset('berita/read/'.$berita->slug_berita) }}"><i class="fas fa-comments"></i> {{ $berita->nama_kategori }}</a> </li>
                     </ul>
                     <p><?php echo \Illuminate\Support\Str::limit(strip_tags($berita->isi), 100, $end='...') ?></p>
                     <a href="{{ asset('berita/read/'.$berita->slug_berita) }}" class="read-post">Baca detail</a>
                  </div>
               </div>
            </div>
            <!--Blog Small Post End-->
            <?php } ?>
         </div>
         <div class="gt-pagination">
            {{ $beritas->links() }}
         </div>
      </div>
   </div>
</section>
<!--Blog End-->
