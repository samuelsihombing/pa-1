<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanKeuangan extends Model
{
    use HasFactory;
    protected $table = 'laporan_keuangan';
    protected $primaryKey = 'id_laporan';
    public function pemesanan(){	
    	return $this->belongsTo('App\Models\Pemesanan');
    }
}
