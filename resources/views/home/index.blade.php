<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header">
    <div class="slider-inner">
        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <?php foreach($slider as $slider) { ?>
                <div class="swiper-slide dark">
                    <div class="container">
                        <div class="slider-caption slider-caption-center">
                                <?php if($slider->status_text=="Ya") { ?>
                                    <h2 data-animate="fadeInUp">{{ strip_tags($slider->isi) }}</h2>
                                    <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">{{ $slider->judul_galeri }}</p>
                                    <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="250"><a href="{{ $slider->website }}" class="button button-reveal button-large button-circle text-right m-0"><i class="icon-angle-right"></i>Baca detail</a></p>
                                    <?php } ?>
                        </div>
                    </div>
                    <div class="swiper-slide-bg" style="background-image: url('{{ asset('assets/upload/image/'.$slider->gambar) }}');"></div>
                </div>
             <?php } ?>
            </div>
            <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
			<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
			<div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
        </div>
    </div>
</section>

<section id="content">
    <div class="content-wrap">
        <div class="promo promo-full promo-border p-5 header-stick bottommargin-lg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg">
                        <h3>Berita Terbaru</h3>
                        <h2>Berita & Artikel</h2>
                    </div>
                    <div class="col-12 col-lg-auto mt-4 mt-lg-0">
                        <a href="{{ asset('berita') }}" class="button button-reveal button-large button-circle text-right m-0"><i class="icon-angle-right"></i><span>Lihat Berita Lainnya</span></a>
							</div>
                </div>
                    <hr>
            </div>
            <div class="row"
                style="background-color: white; padding-top: 20px; padding-bottom: 20px; border-radius: 5px;">
                <?php foreach($berita as $berita) { ?>
                <!--Blog Small Post Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="blog-post">
                        <div class="blog-thumb"> <a
                                href="{{ asset('berita/read/'.$berita->slug_berita) }}"><i
                                    class="fas fa-link"></i></a> <img
                                src="{{ asset('assets/upload/image/thumbs/'.$berita->gambar) }}"
                                alt="><?php  echo $berita->judul_berita ?>"> </div>
                        <div class="post-txt">
                            <h5><a
                                    href="{{ asset('berita/read/'.$berita->slug_berita) }}"><?php  echo $berita->judul_berita ?></a>
                            </h5>
                            <ul class="post-meta">
                                <li> <a
                                        href="{{ asset('berita/read/'.$berita->slug_berita) }}"><i
                                            class="fas fa-calendar-alt"></i>
                                        {{ tanggal('tanggal_id',$berita->tanggal_post) }}</a>
                                </li>
                                <li> <a
                                        href="{{ asset('berita/kategori/'.$berita->slug_berita) }}"><i
                                            class="fas fa-sitemap"></i> {{ $berita->nama_kategori }}</a> </li>
                            </ul>
                            <p><?php echo \Illuminate\Support\Str::limit(strip_tags($berita->isi), 100, $end='...') ?>
                            </p>
                            <a href="{{ asset('berita/read/'.$berita->slug_berita) }}"
                                class="read-post">Baca detail</a>
                        </div>
                    </div>
                </div>
                <!--Blog Small Post End-->
                <?php } ?>
            </div>

            <section class="h2-news wf100 p80 blog">
                <div class="blog-grid">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section-title-2">
                                    <h5>FACEBOOK</h5>
                                    <?php echo $site_config->facebook_page ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>
<!--Blog End-->
