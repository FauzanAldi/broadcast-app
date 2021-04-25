<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Product extends Model
{
    // public $attributes = [ 'hits' => 0 ];

    protected $fillable = [ 'name','price','diskon','file','deskripsi','link','product_id'];
    protected $table = 'product';

    public function files()
    {
        return $this->hasMany(ProductFile::class,'product_id');
    }


}
