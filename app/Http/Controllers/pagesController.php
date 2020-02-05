<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\kategori;
use DB;

class pagesController extends Controller
{

    public function menu()
    {
    	$barang = barang::all();
    	return view('menu')->with('items',$barang);
    }

    public function kategori(){
    	$kategori = kategori::all();
    	return view('kategori')->with('cat',$kategori);
    }
}
