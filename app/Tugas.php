<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
	protected $table = 'tugass';
    protected $primaryKey = 'id_tugas';
    // protected $fillable = {
    // 	'judul_tugas','deskripsi_tugas','departemen_tugas','modul_learn_tugas','waktu_tugas','pembuat_tugas','tgl_tugas','info_tugas','status_tugas','sms_status_tugas','id_modul'
    // }
}
