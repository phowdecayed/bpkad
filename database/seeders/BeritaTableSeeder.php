<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BeritaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('berita')->delete();
        
        \DB::table('berita')->insert(array (
            0 => 
            array (
                'id_berita' => 1,
                'id_user' => 4,
                'id_kategori' => 0,
                'updater' => '-',
                'slug_berita' => 'undang-undang',
                'judul_berita' => 'Undang - Undang',
                'isi' => '<table align="center" border="1" bordercolor="#ccc" cellpadding="5" cellspacing="0" style="border-collapse:collapse">
<caption>
<p>&nbsp;</p>
</caption>
<thead>
<tr>
<th scope="col">
<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">No.</div>
</th>
<th scope="col">
<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">Judul Arsip</div>
</th>
<th scope="col">
<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">Deskripsi</div>
</th>
<th scope="col">
<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">Jenis Arsip</div>
</th>
<th scope="col">
<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">Download</div>
</th>
</tr>
</thead>
<tbody>
<tr>
<td style="text-align:center">1</td>
<td style="text-align:center">Undang Undang Nomor 12 Tahun 2008</td>
<td style="text-align:center">Tentang Perubahan Kedua Atas UU No. 32/2004 Tentang Pemerintahan Daerah</td>
<td style="text-align:center">Produk Hukum</td>
<td style="text-align:center"><a href="http://localhost:8080/bpkad-web/download/unduh/6"><input name="Download" type="button" value="Download" /></a></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>',
                'status_berita' => 'Publish',
                'jenis_berita' => 'Layanan',
                'keywords' => NULL,
                'gambar' => 'logo-dinas-1611050443.png',
                'icon' => NULL,
                'hits' => NULL,
                'urutan' => 1,
                'tanggal_mulai' => NULL,
                'tanggal_selesai' => NULL,
                'tanggal_post' => '2021-01-18 04:40:37',
                'tanggal_publish' => '2021-01-18 04:40:29',
                'tanggal' => '2021-01-23 04:03:28',
            ),
            1 => 
            array (
                'id_berita' => 2,
                'id_user' => 4,
                'id_kategori' => 1,
                'updater' => '-',
                'slug_berita' => 'wagub-minta-pemkabpemkot-responsif-positif-rekomendasi-bpk',
                'judul_berita' => 'Wagub Minta Pemkab/Pemkot Responsif Positif Rekomendasi BPK',
            'isi' => '<p>KAB MAJALENGKA - Wakil Gubernur Jawa Barat Uu Ruzhanul Ulum pemkab/pemkot merespons positif rekomendasi penilaian laporan keuangan oleh Badan Pemeriksa Keuangan (BPK).</p>

<p>Menurutnya, pemeriksaan BPK sangat penting karena akan menjadi parameter setiap instansi pemerintah berkenaan dengan ketertiban, transparansi, dan akuntabilitas pengelolaan keuangan negara di Jabar.&nbsp;</p>

<p>&ldquo;Penilaian atau pemeriksaan dari BPK ini adalah sangat penting, sekaligus untuk membuat citra bagi pemerintah daerah, apakah sudah benar-benar merealisasikan anggaran dari tahun ke tahun sesuai dengan keharusannya, tentang akuntabilitas, transparansi, ataupun hal yang lain,&rdquo; sebut&nbsp;<em>Kang</em>&nbsp;Uu pada acara &quot;<em>Entry Meeting</em>&nbsp;Pemeriksaan Interim LKPD TA. 2020&quot; bersama BPK Perwakilan Provinsi Jawa Barat secara Virtual, dari Kabupaten Majalengka, Senin (1/2/2021).</p>

<p>&ldquo;Oleh karena itu saya berharap pada seluruh pemerintah, kepala dinas di seluruh kabupaten/kota dan provinsi, untuk bisa bekerja sama dengan BPK, memberikan data-data yang terbaik dan benar (valid), dan juga responsif apa yang diharapkan dan diminta BPK,&rdquo; katanya.&nbsp;</p>

<p><em>Kang</em>&nbsp;Uu juga mengimbau agar pihak pemerintah daerah dapat segera menindaklanjuti hasil rekomendasi BPK, sebagai upaya optimalisasi perbaikan pengelolaan keuangan negara di Jabar.</p>

<p>&ldquo;Harapan kami, apapun yang jadi rekomendasi BPK, pemerintah daerah kabupaten/kota termasuk provinsi untuk segera ditindaklanjuti sesuai dengan waktu yang telah ditetapkan,&rdquo; arahnya.</p>

<p><em>Kang&nbsp;</em>Uu menyebut, dalam proses penyusunan laporan keuangan ini masih ditemukan kendala yang menjadi kelemahan laporan keuangan Jabar. Sebagai upaya identifikasi dan evaluasi atas tata kelola keuangan yang telah dilaksanakan,&nbsp;<em>Kang&nbsp;</em>Uu berharap ada kesamaan teori dan rumusan formula penghitungan antara pemprov dengan BPK.</p>

<p>&ldquo;Karena memang teori yang dipakai, cara menghitung yang dipakai, kadang berbeda. Oleh karena itu, harapan kami ada satu kesamaan dalam penilaian, dalam teori, sehingga disaat ada kerugian negara di daerah maupun provinsi bisa benar-benar disepakati jumlahnya, sehingga kami (pemda) tidak merasa ada yang tidak pas,&rdquo; jelas&nbsp;<em>Kang&nbsp;</em>Uu.</p>

<p>Lebih lanjut Kang Uu juga berharap, melalui pemeriksaan ini para kepala dinas dan jajarannya semakin termotivasi melakukan langkah-langkah perbaikan, peningkatan kualitas, kewajaran, dan kebenaran sewaktu menyajikan informasi keuangan dalam pembuatan laporan yang sesuai standar akuntansi pemerintahan, kecukupan pengungkapan laporan keuangan, kepatuhan pada peraturan perundang-undangan, serta efektivitas sistem pengendalian<em>&nbsp;intern</em>. (Pun)</p>

<p>(sumber: jabarprov.go.id)</p>',
                'status_berita' => 'Publish',
                'jenis_berita' => 'Berita',
                'keywords' => NULL,
                'gambar' => 'wagub-1612253340.jpg',
                'icon' => NULL,
                'hits' => NULL,
                'urutan' => NULL,
                'tanggal_mulai' => NULL,
                'tanggal_selesai' => NULL,
                'tanggal_post' => '2021-02-02 08:09:00',
                'tanggal_publish' => '2021-02-02 08:08:05',
                'tanggal' => '2021-02-02 15:09:00',
            ),
            2 => 
            array (
                'id_berita' => 3,
                'id_user' => 4,
                'id_kategori' => 1,
                'updater' => '-',
                'slug_berita' => 'peninjauan-veledrom-sebagai-aset-milik-pemerintah-provinsi-jawa-barat-di-kota-cimahi',
                'judul_berita' => 'Peninjauan Veledrom sebagai Aset Milik Pemerintah Provinsi Jawa Barat di Kota Cimahi',
                'isi' => '<p>Kepala BPKAD, Dra. Nanin Hayani Adam , M.Si meninjau&nbsp;aset milik Pemerintah Provinsi Jawa Barat &nbsp;bersama Komisi I DPRD Provinsi Jawa Barat, Veledrom, merupakan salah satu aset Pemerintah Provinsi Jawa Barat yang terletak di kota Cimahi yang dipergunakan sebagai area untuk olahraga balap sepeda khususnya balap sepeda trek.&nbsp;</p>',
                'status_berita' => 'Publish',
                'jenis_berita' => 'Berita',
                'keywords' => NULL,
                'gambar' => 'veledrom-1612253382.jpg',
                'icon' => NULL,
                'hits' => NULL,
                'urutan' => NULL,
                'tanggal_mulai' => NULL,
                'tanggal_selesai' => NULL,
                'tanggal_post' => '2021-02-02 08:09:42',
                'tanggal_publish' => '2021-02-02 08:09:03',
                'tanggal' => '2021-02-02 15:09:42',
            ),
            3 => 
            array (
                'id_berita' => 4,
                'id_user' => 4,
                'id_kategori' => 1,
                'updater' => '-',
                'slug_berita' => 'peninjauan-aset-milik-pemerintah-provinsi-jawa-barat-di-balai-pengembangan-perbibitan-ternak-domba-dan-kambing-margawati-kabupaten-garut',
                'judul_berita' => 'Peninjauan Aset milik Pemerintah Provinsi Jawa Barat di Balai Pengembangan Perbibitan Ternak Domba dan Kambing Margawati Kabupaten Garut.',
                'isi' => '<p>Sekretaris BPKAD&nbsp;Juneidy Ak, CA&nbsp;bersama Kepala Bidang Pengelolaan Aset Daerah Dwi Agus Sulistyo, S.T., M.T mendampingi Komisi I DPRD Provinsi Jawa Barat ke Kabupaten Garut dalam rangka Peninjauan Aset milik Pemerintah Provinsi Jawa Barat di Balai Pengembangan Perbibitan Ternak Domba dan Kambing Margawati Kabupaten Garut.</p>',
                'status_berita' => 'Publish',
                'jenis_berita' => 'Berita',
                'keywords' => NULL,
                'gambar' => 'garut-1612253414.jpg',
                'icon' => NULL,
                'hits' => NULL,
                'urutan' => NULL,
                'tanggal_mulai' => NULL,
                'tanggal_selesai' => NULL,
                'tanggal_post' => '2021-02-02 08:10:14',
                'tanggal_publish' => '2021-02-02 08:09:50',
                'tanggal' => '2021-02-02 15:10:14',
            ),
        ));
        
        
    }
}