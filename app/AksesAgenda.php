<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AksesAgenda extends Model
{
    //
	protected $table = 'tb_agenda';

    protected $fillable = [
        'id','judul_agenda','tanggal_agenda',
    ];
}
