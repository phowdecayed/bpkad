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
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row gutter-40 col-mb-80">

                		<!-- Post Content
						============================================= -->
						<div class="postcontent col-lg-9">
                            <div id="posts" class="post-timeline">
                                <?php foreach($berita as $berita) { ?>
								<div class="entry">
									<div class="entry-timeline">
                                        <div class="timeline-divider"></div>
                                    </div>
                                    <div class="entry-image">
										<a href="{{ asset('assets/upload/image/thumbs/'.$berita->gambar) }}" data-lightbox="image"><img src="{{ asset('assets/upload/image/thumbs/'.$berita->gambar) }}" alt="<?php  echo $berita->judul_berita ?>"></a>
                                    </div>
                                    <div class="entry-title">
										<h2><a href="{{ asset('berita/read/'.$berita->slug_berita) }}"><?php  echo $berita->judul_berita ?></a></h2>
                                    </div>
                                    <div class="entry-meta">
										<ul>
                                            <li><i class="icon-calendar3"></i>{{ tanggal('tanggal_id',$berita->tanggal_post) }}</li>
											<li><a href="#"><i class="icon-user"></i> admin</a></li>
											<li><i class="icon-folder-open"></i> <a href="#">{{ $berita->nama_kategori }}</a></li>
										</ul>
                                    </div>
                                    <div class="entry-content">
										<p><?php echo \Illuminate\Support\Str::limit(strip_tags($berita->isi), 300, $end='...') ?></p>
										<a href="{{ asset('berita/read/'.$berita->slug_berita) }}" class="more-link">Baca detail</a>
									</div>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="pagination justify-content-center">
                                {{ $beritas->links() }}
                             </div>
                        </div>
            </div>
        </div>
    </div>
</section>
