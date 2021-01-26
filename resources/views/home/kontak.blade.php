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

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row align-items-stretch col-mb-50 mb-0">
                <!-- Contact Form
                ============================================= -->
                <div class="col-lg-6">

                    <div class="form-widget">

                        <div id="comments" class="clearfix">

                            <h3 id="comments-title">Comments</h3>

                            <!-- Disqus Comments
                            ============================================= -->
                            <div id="disqus_thread"></div>
                            <script type="text/javascript">
                                /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                                var disqus_shortname = '{{ $site_config->disqus_shortname }}'; // required: replace example with your forum shortname

                                /* * * DON'T EDIT BELOW THIS LINE * * */
                                (function() {
                                    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                                })();
                            </script>
                            <!-- Disqus Comments end -->

                        </div>
                    </div>

                </div><!-- Contact Form End -->

                <!-- Google Map
                ============================================= -->
                <div class="col-lg-6 min-vh-50">
                    <div class="gmap h-100">
                        <?php echo $site_config->google_map ?>
                </div><!-- Google Map End -->
            </div>
        </div>
    </div>
</section>
<!--Contact End-->
