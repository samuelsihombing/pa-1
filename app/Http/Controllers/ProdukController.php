<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
class ProdukController extends Controller
{
    //
    public function index(){
        $produks = Produk::all();
        return view('layout.menu',compact('produks'));
    }

}
