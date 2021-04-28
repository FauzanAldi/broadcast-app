<?php

namespace App\Http\Controllers;

use App\Models\Tracker;
use App\Models\Slider;
use App\Models\Testimoni;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;  
use Illuminate\Http\Request;
use Auth;
use Illuminate\Routing\Controller as BaseController;


class TrackingController extends BaseController
{

    public function hits(Request $request){


        Tracker::hits($request->category_id,$request->ket);

    }

}