<?php
$bg   = DB::table('heading')->where('halaman','Dokumen')->orderBy('id_heading','DESC')->first();
$site_config = DB::table('konfigurasi')->first();
 ?>
<!--Inner Header Start-->
<section id="page-title" class="page-title-parallax page-title-dark include-header"
    style="padding: 100px 0; background-image: url('{{ asset('assets/upload/image/'.$bg->gambar) }}'); background-size: cover; background-position: center center;"
    data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <h1 data-animate="fadeInUp">Dokumen</h1>
        <span data-animate="fadeInUp" data-delay="300">{{ $site_config->namaweb }}</span>
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
                    <?php foreach($kategori_download as $kategori_download) { $id_kategori_download = $kategori_download->id_kategori_download; ?>
                    <div class="heading-block center">

                        <h1>{{ $kategori_download->nama_kategori_download }}</h1>
                        <span><?php echo $kategori_download->keterangan ?></span>
                        <?php
                        $download = DB::table('download')
                        ->join('kategori_download', 'kategori_download.id_kategori_download', '=', 'download.id_kategori_download','LEFT')
                        ->select('download.*', 'kategori_download.nama_kategori_download')
                        ->where('download.id_kategori_download',$id_kategori_download)
                        ->orderBy('download.id_download','DESC')
                        ->paginate(10); ?>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <?php $i=1; foreach($download as $download) { ?>
                                <tr>
                                    <td> <a href="{{ asset('dokumen/detail/'.$download->id_download.'/'.Str::slug($download->judul_download, '-')) }}"
                                            target="_blank">
                                            <h4 class="mb-2"><?php echo $download->judul_download ?></h4>
                                        </a>
                                        <p class="mb-1"><?php echo $download->isi ?></p>
                                    </td>
                                    <td>
                                        <div class="col-12 col-lg-auto mt-4 mt-lg-0">
                                            <a href="{{ asset('dokumen/unduh/'.$download->id_download) }}"
                                                class="button button-reveal button-small button-circle text-right m-0"><i
                                                    class="icon-angle-right"></i><span>Download</span></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++; } ?>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <?php } ?>
                </div>
            </div>
        </div>
</section>
