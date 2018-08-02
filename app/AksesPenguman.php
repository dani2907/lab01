<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AksesPenguman extends Model
{
    //
	protected $table = 'tb_penguman';

    protected $fillable = [
        'id','judul_penguman','isi_penguman',
    ];
}
