<?php
$bg   = DB::table('heading')->where('halaman','Dokumen')->orderBy('id_heading','DESC')->first();
 ?>
<!--Inner Header Start-->
<section id="page-title" class="page-title-parallax page-title-dark include-header" style="padding: 100px 0; background-image: url('{{ asset('assets/upload/image/'.$bg->gambar) }}'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <h1 data-animate="fadeInUp">{{ $title }}</h1>
        <span data-animate="fadeInUp" data-delay="300"></span>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Beranda</a></li>
          <li class="breadcrumb-item"><a href="#">Download</a></li>
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
                <div class="postcontent col-lg-9">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Nama File</td>
                                    <td>: <?php echo $download->gambar ?></td>
                                 </tr>
                                 <tr>
                                    <td>Ukuran</td>
                                    <td>: <?php
                                    $filename = './assets/upload/file/'.$download->gambar;
                                    echo number_format(filesize($filename)/1000000,2, '.', '') ?> MB</td>
                                 </tr>
                                 <tr>
                                    <td class="text-center" colspan="2">
                                       <a href="{{ asset('dokumen/unduh/'.$download->id_download) }}" class="btn btn-info btn-block"><i class="fa fa-download"></i> Download</a>
                                    </td>
                                 </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="heading-block center">
                        <span><?php echo $download->isi ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog End-->
