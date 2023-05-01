<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    protected $table = 'keranjang';
    protected $primaryKey = 'id_keranjang';

    public function produk(){	
    	return $this->belongsTo('App\Models\Produk')->withDefault();
    }
    public function customer(){	
    	return $this->belongsTo('App\Models\Customer','id_customer');
    }


}
