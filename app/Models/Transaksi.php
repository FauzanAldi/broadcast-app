<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Transaksi extends Model
{
    // public $attributes = [ 'hits' => 0 ];

    protected $fillable = [ 'nama','email','whatsapp','qty','products_id'];
    protected $table = 'transaksi';


}
