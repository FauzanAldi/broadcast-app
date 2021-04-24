<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Testimoni;
use App\Models\User;
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
            'u'=>User::has('testimoni')->get()
            
            ]);

    }

}