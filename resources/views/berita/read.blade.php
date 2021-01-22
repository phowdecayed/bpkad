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
        <li class="breadcrumb-item"><a href="#">Berita & Artikel</a></li>
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
                        <div class="entry-image">
                            <a href="{{ asset('assets/upload/image/'.$read->gambar) }}" data-lightbox="image"><img src="{{ asset('assets/upload/image/'.$read->gambar) }}" alt="{{ $title }}"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="{{ $title }}">{{ $title }}</a></h2>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <?php $i=0; foreach($berita as $berita) { ?>
                                <li><i class="icon-calendar3"></i>{{ tanggal('tanggal_id',$berita->tanggal_post) }}</li>
                                <li><a href="#"><i class="icon-user"></i> admin</a></li>
                                <li><i class="icon-folder-open"></i> <a href="#">{{ $berita->nama_kategori }}</a></li>
                                <?php if (++$i > 0) break;} ?>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p><?php echo $read->isi ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



