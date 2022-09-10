<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Models\Produk;

class HomeController extends Controller{

    function showIndex(){
        return view('frontview/index');
    }

    function showCart(){
        return view('frontview/cart');
    }

    function showShop(){
        return view('frontview/shop');
    }

    function showSingle(){
        return view('frontview/single');
    }
    function showBase(){
        return view('template/base');
    }
    function showProduk(){
        return view('admin/produk');
    }
    function showKategori(){
        return view('admin/kategori');
    }

    function showBeranda(){
        return view('admin/beranda');
    }

    function showPromo(){
        return view('admin/promo');
    }

    public function testCollection()
    {
       $list_bike = ['Honda', 'Yamaha', 'Kawasaki', 'Suzuki', 'Vespa', 'BMW', 'KTM'];
       $collection = collect($list_bike);
       $list_produk = Produk::all();

       // Sorting
       // Sort By Harga Terendah
       // dd($list_produk->sortBy('harga));
       // Sort By Harga Tertinggi
       // dd($list_produk->sortByDesc('harga));
       //$data['list'] = $list_produk;
       //return view('test-collection', $data);

        // map
        //foreach($list_produk as $item){
        //echo "$item->nama<br>";
        //}
        //$list_produk->each(function ($item){
        //  echo "$item->nama<br>";
        //});

       // filter
       // $filtered = $list_produk->filter(function ($item){
        //return $item->harga > 200000;
       //});

       //d($filtered);

       //$sum = $list_produk->avg('harga');
       //dd($sum);
       
       $data['list'] = $list_produk;
       return view('test-collection', $data);
       
    }

    function testAjax(){
        $data['list_provinsi'] = Provinsi::all();
        return view('test-ajax', $data);
    }
}