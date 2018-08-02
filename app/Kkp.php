<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kkp extends Model
{
    //
	protected $table = 'tb_kkp';

    protected $fillable = [
        'id','nama_instansi','alamat_instansi','penguji','pembimbing','status','pesan','id_pengajuan',
    ];
}
