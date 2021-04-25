<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class ProductFile extends Model
{
    // public $attributes = [ 'hits' => 0 ];

    protected $fillable = [ 'name','file','link'];
    protected $table = 'product_file';


}
