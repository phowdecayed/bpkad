<?php
use App\Models\Berita_model;
$bg   = DB::table('heading')->where('halaman','Berita')->orderBy('id_heading','DESC')->first();
$site_config = DB::table('konfigurasi')->first();
$berita 	= new Berita_model();
?>

 <!--Inner Header Start-->
<section id="page-title" class="page-title-parallax page-title-dark include-header" style="padding: 100px 0; background-image: url('{{ asset('assets/upload/image/'.$bg->gambar) }}'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
    <h1 data-animate="fadeInUp">Hasil Pencarian</h1>
      <span data-animate="fadeInUp" data-delay="300"></span>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
        <li class="breadcrumb-item active" aria-current="page">Hasil Pencarian</li>
    </ol>
   </div>
</section>
<!--Inner Header End-->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row gutter-40 col-mb-80">
                <div class="postcontent col-lg-9">
                    <div class="heading-block center">
                        <h1></h1>
                        <span></span>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <?php $i=1; foreach($search as $search) {
                                    if (count($search) > 10) { ?>
                                    <tr>
                                    <td> <a href="{{ asset('berita/read/'.$berita->slug_berita) }}"
                                            target="_blank">
                                            <h4 class="mb-2"><?php  echo $berita->judul_berita ?></h4>
                                        </a>
                                        <p class="mb-0" align='justify'><?php echo \Illuminate\Support\Str::limit(strip_tags($berita->isi), 100, $end='...') ?></p>
                                    </td>
                                    </tr>
                                    <?php $i++; }} ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="pagination justify-content-center">
                    <br><br>

                 </div>
            </div>
        </div>
    </div>
</section>
