<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Testimoni;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;  
use Illuminate\Http\Request;
use Auth;
use Illuminate\Routing\Controller as BaseController;


class ContactController extends BaseController
{

    public function store(Request $request){

        $data=new Contact();
        $data->whatsapp=$request->whatsapp;
        $data->nama=$request->nama;
        $data->email=$request->email;
        $data->pesan=$request->pesan;
        $data->save();

        return back()->with('message','Pesan Anda Sudah Kami Terima, Silahkan Tunggu Balasan Dari Kami');

    }

}