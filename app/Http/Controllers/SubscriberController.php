<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Testimoni;
use App\Models\Subscriber;
use Illuminate\Support\Facades\DB;  
use Illuminate\Http\Request;
use Auth;
use Illuminate\Routing\Controller as BaseController;


class SubscriberController extends BaseController
{

    public function store(Request $request){

        $data=new Subscriber();
        $data->whatsapp=$request->whatsapp;
        $data->nama=$request->nama;
        $data->email=$request->email;
        $data->save();

        return back()->with('message','Voucher Gratis Ongkir Sudah Di Kirimkan Ke Email dan Whatsapp');

    }

}