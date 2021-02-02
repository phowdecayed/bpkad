<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KonfigurasiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('konfigurasi')->delete();
        
        \DB::table('konfigurasi')->insert(array (
            0 => 
            array (
                'id_konfigurasi' => 1,
                'namaweb' => 'Badan Pengelolaan Keuangan dan Aset Daerah',
                'nama_singkat' => 'Struktur Organisasi',
                'tagline' => 'Bersama Kita Bisa',
                'tagline2' => 'Jabar Juara Lahir Batin Dengan Kolaborasi dan Inovasi',
                'tentang' => '<p><img alt="struktur organisasi" src="https://i.ibb.co/0ynNzLn/Struktur-Organisasi-BPKAD2021-3-page-0001.jpg" /></p>

<p>&nbsp;</p>

<p>BPKAD Provinsi Jawa Barat merupakan Perangkat Daerah yang di bentuk berdasarkan Peraturan Daerah Nomor 6 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Provinsi Jawa Barat yang merupakan penggabungan tugas dan fungsi dari Biro Keuangan dan Biro Pengelolaan Barang Milik Daerah. Selanjutnya untuk memenuhi ketentuan-ketentuan sebagaimana tersebut diatas, BPKAD juga menyusun Rencana Strategis tahun 2017-2018 yang dalam hal ini menggabungkan, menyesuaikan, dan melanjutkan Rencana Strategis Biro Keuangan dan Rencana Strategis Biro Pengelolaan Barang Milik Daerah yang telah disusun sebelumnya (Tahun 2013-2018). Hal ini merupakan upaya dari BPKAD dalam mempertahankan dan bahkan meningkatkan pencapaian kinerja yang telah diraih oleh Biro Keuangan dan Biro Pengelolaan Barang Milik Daerah.<br />
<br />
<strong>Visi BPKAD Provinsi Jawa Barat :&nbsp;</strong></p>

<p>Badan Pengelolaan Keuangan dan Aset Daerah Provinsi Jawa Barat menetapkan komitmen untuk mewujudkan visi BPKAD kedepan yaitu: &rdquo;Mewujudkan Pengelolaan Keuangan dan Aset Daerah yang Akuntabel&rdquo;.</p>

<p><br />
<strong>Misi&nbsp;BPKAD Provinsi Jawa Barat :&nbsp;</strong></p>

<ol>
<li>Meningkatkan akuntabilitas pengelolaan keuangan dan aset daerah serta&nbsp;&nbsp; pembinaan pengelolaan keuangan kabupaten/kota;</li>
<li>Meningkatkan kualitas pengelolaan barang milik daerah;</li>
<li>Meningkatkan kompetensi aparatur pengelola keuangan dan barang milik daerah.<br />
&nbsp;</li>
</ol>

<p><strong>Tujuan&nbsp; BPKAD Provinsi Jawa Barat:&nbsp;</strong></p>

<p>Tujuan BPKAD dalam melaksanakan tupoksinya adalah :</p>

<ul>
<li>Mewujudkan&nbsp; manajemen&nbsp; pengelolaan keuangan daerah yang handal dan terintegrasi berbasis teknologi informasi&nbsp; serta Mewujudkan pengelolaan keuangan daerah kab./Kota yang akuntabel dan taat azaz;</li>
<li>Mewujudkan&nbsp; manajemen pengelolaan barang daerah&nbsp; yang&nbsp; tertib dan optimal yang&nbsp; terintegrasi berbasis teknologi informasi;</li>
<li>Mewujudkan&nbsp; manajemen pengelolaan sdm keuangan dan barang milik daerah Profesional dan kompeten.</li>
</ul>

<p>&nbsp;</p>

<p><strong>Sasaran</strong>&nbsp;<strong>BPKAD</strong>&nbsp;<strong>Provinsi Jawa Barat:&nbsp;</strong></p>

<p>Sasaran merupakan suatu kondisi ideal yang hendak dicapai dalam rangka pengelolaan keuangan dan asset daerah. Sasaran yang ingin dicapai tersebut antara lain :</p>

<ul>
<li>Meningkatnya kualitas pengelolaan keuangan daerah;</li>
<li>Meningkatnya kualitas pengelolaan aset daerah;</li>
<li>Meningkatkan kapasitas dan akuntabilitas kinerja pengelolaan keuangan dan aset daerah;</li>
</ul>

<p>&nbsp;</p>

<p><strong>Tugas Pokok BPKAD Provinsi Jawa Barat&nbsp;</strong></p>

<p>Pengelolaan&nbsp; Keuangan Dan Aset&nbsp; Daerah Pemerintah Daerah&nbsp; Provinsi&nbsp; Jawa Barat&nbsp; mempunyai&nbsp; tugas&nbsp; pokok melaksanakan&nbsp;&nbsp; fungsi penunjang urusan&nbsp;&nbsp; pemerintahan&nbsp;&nbsp;&nbsp; bidang&nbsp;&nbsp; keuangan,&nbsp;&nbsp;&nbsp; aspek&nbsp;&nbsp;&nbsp; pengelolaan keuangan dan aset Daerah, meliputi anggaran, perbendaharaan, akuntansi&nbsp; dan&nbsp; pelaporan serta&nbsp; pengelolaan&nbsp; barang&nbsp; milik Daerah yang&nbsp; menjadi&nbsp; kewenangan&nbsp; Daerah&nbsp; Provinsi, melaksanakan&nbsp;&nbsp; tugas dekonsentrasi&nbsp;&nbsp;&nbsp; sampai&nbsp;&nbsp; dengan&nbsp;&nbsp; dibentuk&nbsp;&nbsp; Sekretariat&nbsp;&nbsp;&nbsp; Gubernur sebagai&nbsp; Wakil Pemerintah&nbsp; Pusat&nbsp; dan&nbsp; melaksanakan&nbsp; tugas pembantuan sesuai&nbsp; bidang tugasnya</p>

<p>&nbsp;</p>

<p><strong>Fungsi BPKAD Provinsi Jawa Barat</strong></p>

<p>Dalam menyelenggarakan tugas pokok sebagaimana tersebut di atas, BPKAD Provinsi Jawa Barat mempunyai fungsi :</p>

<ol>
<li>
<ol>
<li>Penyelenggaraan perumusan kebijakan teknis di bidang pengelolaan keuangan dan asset daerah yang menjadi kewenangan Provinsi;</li>
<li>Penyelenggaraan pengelolaan keuangan dan asset daerah yang menjadi kewenangan Provinsi;</li>
<li>Penyelenggaraan administrasi Badan;</li>
<li>Penyelenggaraan evaluasi dan pelaporan Badan; dan</li>
<li>Penyelenggaraan fungsi lain sesuai dengan tugas pokok dan fungsinya</li>
</ol>
</li>
</ol>',
                'deskripsi' => 'Website Resmi Badan Pengelolaan Keuangan dan Aset Daerah',
                'website' => 'https://bpkad.jabarprov.go.id',
                'email' => 'bpkad@jabarprov.go.id',
                'email_cadangan' => NULL,
                'alamat' => 'Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115',
                'telepon' => '022 - 4233347',
                'hp' => NULL,
                'fax' => '022 - 4233347',
                'logo' => 'logo-bpkad.png',
                'icon' => 'favicon.png',
                'keywords' => NULL,
                'metatext' => NULL,
                'facebook' => 'https://web.facebook.com/BpkadJabar',
                'twitter' => 'https://twitter.com/bpkadjabarprov',
                'instagram' => 'https://www.instagram.com/bpkadjabarprov/',
                'google_plus' => 'https://www.youtube.com/channel/UCmm6mFZXYQ3ZylUMa0Tmc2Q',
                'nama_facebook' => 'Badan Pengelolaan Keuangan dan Aset Daerah',
                'nama_twitter' => 'BPKAD PROV JABAR',
                'nama_instagram' => 'bpkadjabarprov',
                'nama_google_plus' => '',
                'singkatan' => 'BPKAD',
                'google_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.634383807166!2d107.618288!3d-6.901534000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5543cd68e7b6719d!2sBadan%20Pengelolaan%20Keuangan%20dan%20Aset%20Daerah%20Provinsi%20Jawa%20Barat!5e0!3m2!1sen!2sid!4v1610946848456!5m2!1sen!2sid" width="250" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
                'gambar' => 'logo-dinas.png',
                'video' => 'fsH_KhUWfho',
                'gambar_berita' => 'balairung-budiutomo-01.jpg',
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://mail.mail.com',
                'smtp_port' => '465',
                'smtp_timeout' => '12',
                'smtp_user' => 'info@mail.com',
                'smtp_pass' => '1234',
                'twitter_feeds' => '<a class="twitter-timeline" data-width="400" data-height="500" href="https://twitter.com/bpkadjabarprov?ref_src=twsrc%5Etfw">Tweets by bpkadjabarprov</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>',
                'text_bawah_peta' => 'Badan Pengelolaan Keuangan dan Aset Daerah',
                'id_user' => 4,
                'tanggal' => '2021-01-23 02:41:40',
                'nama_youtube' => 'BPKAD PROV JABAR',
                'youtube' => 'https://www.youtube.com/channel/UCZPhYb-0GV5t_FKE1c2u1ZA',
                'facebook_page' => '<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbpkadjabar&tabs=timeline,messages&width=400&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="400" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>',
                'disqus_shortname' => 'bpkad-jabarprov-go-id',
            ),
        ));
        
        
    }
}