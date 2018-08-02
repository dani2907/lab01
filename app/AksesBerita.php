<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AksesBerita extends Model
{
    //
	protected $table = 'tb_berita';

    protected $fillable = [
        'id','judul_berita','kategori_top','kategori_populer','isi_berita','gambar','created_at',
    ];
}
