<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
	protected $table = 'tb_admin';

    protected $fillable = [
        'id','id_user','admin',
    ];
}
