<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Testimoni;
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

    	

    }

}