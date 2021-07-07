<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Regencies extends Model
{
    // public $attributes = [ 'hits' => 0 ];

    protected $fillable = [ 'name'];
    protected $table = 'geo_regencies';


}
