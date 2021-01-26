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
                            <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">
                                {{ $slider->judul_galeri }}</p>
                            <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="250"><a
                                    href="{{ $slider->website }}"
                                    class="button button-reveal button-large button-circle text-right m-0"><i
                                        class="icon-angle-right"></i>Baca detail</a></p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="swiper-slide-bg"
                        style="background-image: url('{{ asset('assets/upload/image/'.$slider->gambar) }}');">
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
            <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
            <div class="slide-number">
                <div class="slide-number-current"></div><span>/</span>
                <div class="slide-number-total"></div>
            </div>
        </div>
    </div>
</section>

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg">
                        <h3>Berita Terbaru</h3>
                        <h2>Berita & Artikel</h2>
                    </div>
                    <div class="col-12 col-lg-auto mt-4 mt-lg-0">
                        <a href="{{ asset('berita') }}"
                            class="button button-reveal button-large button-circle text-right m-0"><i
                                class="icon-angle-right"></i><span>Lihat Berita Lainnya</span></a>
                    </div>
                </div>
                <hr>
            </div>
            <div class="row gutter-40 col-mb-80">
                <!-- Post Content
                    ============================================= -->
                <div class="postcontent col-lg-9">
                    <!-- Posts
                        ============================================= -->
                    <div id="posts" class="row grid-container gutter-40">
                        <div class="entry col-12">
                            <?php $i=0; foreach($berita as $berita) { ?>
                            <div class="grid-inner row no-gutters">
                                <div class="entry-image col-md-4">
                                    <a href="{{ asset('assets/upload/image/thumbs/'.$berita->gambar) }}"
                                        data-lightbox="image"><img
                                            src="{{ asset('assets/upload/image/thumbs/'.$berita->gambar) }}"
                                            alt="<?php  echo $berita->judul_berita ?>"></a>
                                </div>
                                <div class="col-md-8 pl-md-4">
                                    <div class="entry-title title-sm">
                                        <h2><a
                                                href="{{ asset('berita/read/'.$berita->slug_berita) }}"><?php  echo $berita->judul_berita ?></a>
                                        </h2>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i
                                                    class="icon-calendar3"></i>{{ tanggal('tanggal_id',$berita->tanggal_post) }}
                                            </li>
                                            <li><a href="#"><i class="icon-user"></i>admin</a></li>
                                            <li><i class="icon-folder-open"></i><a
                                                    href="#">{{ $berita->nama_kategori }}</a></li>
                                        </ul>
                                        <div class="entry-content">
                                            <p align="justify">
                                                <?php echo \Illuminate\Support\Str::limit(strip_tags($berita->isi), 250, $end='...') ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if (++$i > 2) break; } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <hr>
        <div class="container clearfix">
            <div class="heading-block center">
                <h1>Sosial Media</h1>
                <span>Informasi dari Sosial Media Kami</span>
            </div>
            <div id="portfolio" class="portfolio row grid-container gutter-30" data-layout="fitRows">
                <article class="portfolio-item col-md-4 col-sm-6 col-12">
                    <div class="heading-block center">
                        <h3>Instagram</h3>
                        <span>@bpkadjabarprov</span>
                    </div>
                    <div class="grid-inner center">
                        <div class="instagram-photos" data-user="<?php echo $site_config->nama_instagram ?>" data-count="1"></div>
                    </div>
                </article>
                <article class="portfolio-item col-md-4 col-sm-6 col-12">
                    <div class="heading-block center">
                        <h3>Facebook</h3>
                        <span>bpkadjabar</span>
                    </div>
                    <div class="grid-inner center">
                        <?php echo $site_config->facebook_page ?>
                    </div>
                </article>
                <article class="portfolio-item col-md-4 col-sm-6 col-12">
                    <div class="heading-block center">
                        <h3>Twitter</h3>
                        <span>@bpkadjabarprov</span>
                    </div>
                    <div class="grid-inner center">
                        <?php echo $site_config->twitter_feeds ?>
                    </div>
                </article>
            </div>
        </div>
        <hr>
        <div class="heading-block center">
            <h1>Link Terkait</h1>
            <span></span>
        </div>
        <div id="portfolio" class="portfolio row grid-container gutter-30" data-layout="fitRows">
            <article class="portfolio-item col-md-4 col-sm-6 col-12">
                <div class="container clearfix">
                 <!-- <div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="30"
            data-nav="true" data-pagi="true" data-autoplay="2000" data-items-xs="3" data-items-sm="3" data-items-md="5"
            data-items-lg="6" data-items-xl="7">
            <div class="oc-item"><a href="#"><img src="images/clients/1.png" alt="Brands"></a></div>
			<div class="oc-item"><a href="#"><img src="images/clients/2.png" alt="Brands"></a></div>
			<div class="oc-item"><a href="#"><img src="images/clients/3.png" alt="Brands"></a></div>
			<div class="oc-item"><a href="#"><img src="images/clients/4.png" alt="Brands"></a></div>
			<div class="oc-item"><a href="#"><img src="images/clients/5.png" alt="Brands"></a></div>
			<div class="oc-item"><a href="#"><img src="images/clients/6.png" alt="Brands"></a></div>
			<div class="oc-item"><a href="#"><img src="images/clients/7.png" alt="Brands"></a></div>
			<div class="oc-item"><a href="#"><img src="images/clients/8.png" alt="Brands"></a></div>
			<div class="oc-item"><a href="#"><img src="images/clients/9.png" alt="Brands"></a></div>
			<div class="oc-item"><a href="#"><img src="images/clients/10.png" alt="Brands"></a></div>
			<div class="oc-item"><a href="#"><img src="images/clients/11.png" alt="Brands"></a></div>
			<div class="oc-item"><a href="#"><img src="images/clients/12.png" alt="Brands"></a></div>
        </div> -->
                </div>
            </article>
        </div>
    </div>
</section>
