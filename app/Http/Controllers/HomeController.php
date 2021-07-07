<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Testimoni;
use App\Models\User;
use App\Models\Regencies;
use App\Models\Product;
use Illuminate\Support\Facades\DB;  
use Illuminate\Http\Request;
use Auth;
use Illuminate\Routing\Controller as BaseController;


class HomeController extends BaseController
{

    public function index(){

        return view('yasin.index',[
            's'=>Slider::all(),
            't'=>Testimoni::all(),
            'u'=>User::has('testimoni')->get(),
            'p'=>Product::all()
            
            ]);

    }

    public function regencies($seotitle){

        $prefix="cetak-yasin-murah-dan-cepat-di-";
        $total=strtoupper(str_replace("-"," ",str_replace($prefix,"",$seotitle)));
        $r=Regencies::where('name',$total)->firstOrFail();

        return view('yasin.domisili.index-domisili',[
            's'=>Slider::all(),
            't'=>Testimoni::all(),
            'u'=>User::has('testimoni')->get(),
            'p'=>Product::all(),
            'r'=>$r
            ]);

        // dd($data);

    }

    public function getTestimoni(Request $request){
        // dd('haha');
        $u=User::where('id',$request->id)->get();

        return view('yasin.testimoni',['u'=>$u]);

    }

}