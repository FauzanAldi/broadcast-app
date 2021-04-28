<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;  
use Illuminate\Http\Request;
use Auth;
use Illuminate\Routing\Controller as BaseController;


class ProductController extends BaseController
{

    public function detail($id){

    	$data=Product::findOrFail($id);

        return view('yasin.detail-products',[
            
            	'p' => $data

            ]);

    }

    public function buy(Request $request){

    	$data=new Transaksi();
    	$data->products_id=$request->products_id;
    	$data->qty=$request->qty;
    	$data->whatsapp=$request->whatsapp;
        $data->nama=$request->nama;
        $data->email=$request->email;

        $data->save();

        $p=Product::find($request->products_id);
        if ($p) {
        	$pname='"'.$p->name.'"';
        }else{
        	$pname='...';
        }

        return redirect('https://api.whatsapp.com/send/?phone=6285888295270&text=Hallo Saya '.$request->nama.', Ingin Membeli Produk '.$pname.' Sebanyak '.$request->qty.' pcs&app_absent=0');

    }

}