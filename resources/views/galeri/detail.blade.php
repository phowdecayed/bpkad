<?php
$bg   = DB::table('heading')->where('halaman','Berita')->orderBy('id_heading','DESC')->first();
 ?>
<!--Inner Header Start-->
<section id="page-title" class="page-title-parallax page-title-dark include-header" style="padding: 100px 0; background-image: url('{{ asset('assets/upload/image/'.$bg->gambar) }}'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <h1 data-animate="fadeInUp">{{ $title }}</h1>
        <span data-animate="fadeInUp" data-delay="300"></span>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Beranda</a></li>
          <li class="breadcrumb-item"><a href="#">Galeri</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detail {{ $title }}</li>
      </ol>
     </div>
</section>
<!--Inner Header End-->
<!--Blog Start-->

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="row grid-container gutter-30">

                <div class="entry col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{{ asset('galeri/detail/'.$galeri->id_galeri) }}" data-lightbox="image"><img src="{{ asset('assets/upload/image/thumbs/'.$galeri->gambar) }}" alt="{{ $title }}"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="#"><?php  echo $galeri->judul_galeri ?></a></h2>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-calendar3"></i>{{ $galeri->tanggal }}</li>
                                <li><a href="#"><i class="icon-user"></i> admin</a></li>
                                <li><i class="icon-folder-open"></i> <a href="#">{{ $galeri->nama_kategori_galeri }}</a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p align="justify"><?php echo $galeri->isi ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
