<?php
$bg   = DB::table('heading')->where('halaman','Berita')->orderBy('id_heading','DESC')->first();
 ?>
<!--Inner Header Start-->
<section id="page-title" class="page-title-parallax page-title-dark include-header" style="padding: 100px 0; background-image: url('{{ asset('assets/upload/image/'.$bg->gambar) }}'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <h1 data-animate="fadeInUp">Galeri Foto</h1>
        <span data-animate="fadeInUp" data-delay="300">Badan Pengelolaan Keuangan dan Aset Daerah</span>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Beranda</a></li>
          <li class="breadcrumb-item"><a href="#">Galeri</a></li>
          <li class="breadcrumb-item active" aria-current="page">Galeri Foto</li>
      </ol>
     </div>
</section>
<!--Inner Header End-->
<!--Blog Start-->

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="portfolio" class="portfolio row grid-container gutter-30" data-layout="fitRows">
                <?php foreach($galeris as $galeri) { ?>
            <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-media pf-icons">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <a href="{{ asset('galeri/detail/'.$galeri->id_galeri) }}">
                            <img src="{{ asset('assets/upload/image/thumbs/'.$galeri->gambar) }}" alt="<?php  echo $galeri->judul_galeri ?>">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="{{ asset('assets/upload/image/thumbs/'.$galeri->gambar) }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                                <a href="{{ asset('galeri/detail/'.$galeri->id_galeri) }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="{{ asset('galeri/detail/'.$galeri->id_galeri) }}"><?php  echo $galeri->judul_galeri ?></a></h3>
                        <span><i class="icon-calendar3"></i><a href="#"> {{ tanggal('tanggal_id',$galeri->tanggal)}}</a>  <a href="#"><i class="icon-folder-open"></i>{{ $galeri->nama_kategori_galeri }}</a></span>
                        <div class="entry-content" data-readmore="true" data-readmore-maskcolor="#DDD" data-readmore-masksize="50%" data-readmore-trigger-open="<i class='icon-angle-down i-plain i-large m-0 float-none'></i>" data-readmore-trigger-close="<i class='icon-angle-up i-plain i-large m-0 float-none'></i>">
                        <p><?php echo \Illuminate\Support\Str::limit(strip_tags($galeri->isi), 100, $end='...') ?></p>
                        <a href="{{ asset('galeri/detail/'.$galeri->id_galeri) }}" class="read-more-trigger">Baca detail</a>
                        </div>
                    </div>
                </div>
            </article>
                <?php } ?>
            </div>
            <div class="pagination justify-content-center">
                {{ $galeris->links() }}
             </div>
        </div>
    </div>
</section>
