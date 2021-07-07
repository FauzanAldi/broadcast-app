<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Sitemap;
use App\Models\Product;
use App\Models\Regencies;

class SitemapController extends Controller
{
    public function index()
    {
        $Products = Product::all();
        Sitemap::addTag(url(''), date('Y-m-d H:i:s', strtotime("-1 days")), 'daily', '0.8');
        foreach ($Products as $Product) {
            Sitemap::addTag(route('product.detail',$Product->id), $Product->updated_at, 'daily', '0.8');
        }

        $domisili= Regencies::all();
        foreach($domisili as $key){
            $data='/cetak-yasin-murah-dan-cepat-di-'.strtolower(str_replace(' ','-',$key->name));
            Sitemap::addTag(url($data), $Product->updated_at, 'daily', '0.8');
        }
        return Sitemap::render();
    }
}