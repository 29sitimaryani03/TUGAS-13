<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Provinsi;
use App\Http\Controllers\API\AlamatResource;

class ClientController extends Controller
{
    function filter()
    {
        $nama = request('nama');
        $data['nama'] = $nama;
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();

        return view('frontview.shop', $data);
    }


    function showIndex()
    {
        $data['list_produk'] = Produk::all();
        return view('frontview.index', $data);
    }

    function showCart()
    {
        return view('frontview.cart');
    }

    function showCheckout(Produk $produk)
  {
    $data['list_provinsi'] = Provinsi::all();
    $data['produk'] = $produk;
    return view('frontview.checkout', $data);
  }


    function showShop()
    {
        $data['list_produk'] = Produk::all();
        $data['list_produk'] = Produk::paginate(4);
        return view('frontview.shop', $data);
    }

    function showSingle(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('frontview.single', $data);
    }

}