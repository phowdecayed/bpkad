<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class link_model extends Model
{
	protected $table 		= "link";
	protected $primaryKey 	= 'id_link';

    // listing
    public function semua()
    {
        $query = DB::table('link')
            ->join('kategori_link', 'kategori_link.id_kategori_link', '=', 'link.id_kategori_link','LEFT')
            ->select('link.*', 'kategori_link.slug_kategori_link', 'kategori_link.nama_kategori_link')
            ->orderBy('link.id_link','DESC')
            ->get();
        return $query;
    }

    // listing
    public function cari($keywords)
    {
        $query = DB::table('link')
            ->join('kategori_link', 'kategori_link.id_kategori_link', '=', 'link.id_kategori_link','LEFT')
            ->select('link.*', 'kategori_link.slug_kategori_link', 'kategori_link.nama_kategori_link')
            ->where('link.judul_link', 'LIKE', "%{$keywords}%")
            ->orWhere('link.isi', 'LIKE', "%{$keywords}%")
            ->orderBy('id_link','DESC')
            ->get();
        return $query;
    }

    // listing
    public function listing()
    {
    	$query = DB::table('link')
            ->join('kategori_link', 'kategori_link.id_kategori_link', '=', 'link.id_kategori_link','LEFT')
            ->select('link.*', 'kategori_link.slug_kategori_link', 'kategori_link.nama_kategori_link')
            ->where('status_link','Publish')
            ->orderBy('id_link','DESC')
            ->get();
        return $query;
    }

    // kategori
    public function kategori_link($id_kategori_link)
    {
        $query = DB::table('link')
            ->join('kategori_link', 'kategori_link.id_kategori_link', '=', 'link.id_kategori_link','LEFT')
            ->select('link.*', 'kategori_link.slug_kategori_link', 'kategori_link.nama_kategori_link')
            ->where(array(  'link.status_link'         => 'Publish',
                            'link.id_kategori_link'    => $id_kategori_link))
            ->orderBy('id_link','DESC')
            ->get();
        return $query;
    }

    // kategori
    public function all_kategori_link($id_kategori_link)
    {
        $query = DB::table('link')
            ->join('kategori_link', 'kategori_link.id_kategori_link', '=', 'link.id_kategori_link','LEFT')
            ->select('link.*', 'kategori_link.slug_kategori_link', 'kategori_link.nama_kategori_link')
            ->where(array(  'link.id_kategori_link'    => $id_kategori_link))
            ->orderBy('id_link','DESC')
            ->get();
        return $query;
    }

    // kategori
    public function status_link($status_link)
    {
        $query = DB::table('link')
            ->join('kategori_link', 'kategori_link.id_kategori_link', '=', 'link.id_kategori_link','LEFT')
            ->select('link.*', 'kategori_link.slug_kategori_link', 'kategori_link.nama_kategori_link')
            ->where(array(  'link.jenis_link'         => $status_link))
            ->orderBy('id_link','DESC')
            ->get();
        return $query;
    }

    // kategori
    public function detail_kategori_link($id_kategori_link)
    {
        $query = DB::table('link')
            ->join('kategori_link', 'kategori_link.id_kategori_link', '=', 'link.id_kategori_link','LEFT')
            ->select('link.*', 'kategori_link.slug_kategori_link', 'kategori_link.nama_kategori_link')
            ->where(array(  'link.status_link'         => 'Publish',
                            'link.id_kategori_link'    => $id_kategori_link))
            ->orderBy('id_link','DESC')
            ->first();
        return $query;
    }

    // kategori
    public function detail_slug_kategori_link($slug_kategori_link)
    {
        $query = DB::table('link')
            ->join('kategori_link', 'kategori_link.id_kategori_link', '=', 'link.id_kategori_link','LEFT')
            ->select('link.*', 'kategori_link.slug_kategori_link', 'kategori_link.nama_kategori_link')
            ->where(array(  'link.status_link'                  => 'Publish',
                            'kategori_link.slug_kategori_link'  => $slug_kategori_link))
            ->orderBy('id_link','DESC')
            ->first();
        return $query;
    }


    // kategori
    public function slug_kategori_link($slug_kategori_link)
    {
        $query = DB::table('link')
            ->join('kategori_link', 'kategori_link.id_kategori_link', '=', 'link.id_kategori_link','LEFT')
            ->select('link.*', 'kategori_link.slug_kategori_link', 'kategori_link.nama_kategori_link')
            ->where(array(  'link.status_link'                  => 'Publish',
                            'kategori_link.slug_kategori_link'  => $slug_kategori_link))
            ->orderBy('id_link','DESC')
            ->get();
        return $query;
    }

    // detail
    public function read($slug_link)
    {
        $query = DB::table('link')
            ->join('kategori_link', 'kategori_link.id_kategori_link', '=', 'link.id_kategori_link','LEFT')
            ->select('link.*', 'kategori_link.slug_kategori_link', 'kategori_link.nama_kategori_link')
            ->where('link.slug_link',$slug_link)
            ->orderBy('id_link','DESC')
            ->first();
        return $query;
    }

     // detail
    public function detail($id_link)
    {
        $query = DB::table('link')
            ->join('kategori_link', 'kategori_link.id_kategori_link', '=', 'link.id_kategori_link','LEFT')
            ->select('link.*', 'kategori_link.slug_kategori_link', 'kategori_link.nama_kategori_link')
            ->where('link.id_link',$id_link)
            ->orderBy('id_link','DESC')
            ->first();
        return $query;
    }

    // Gambar
    public function gambar($id_link)
    {
        $query = DB::table('gambar_link')
            ->select('*')
            ->where('gambar_link.id_link',$id_link)
            ->orderBy('id_link','DESC')
            ->get();
        return $query;
    }
}
