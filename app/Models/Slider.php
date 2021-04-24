<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Slider extends Model
{
    // public $attributes = [ 'hits' => 0 ];

    protected $fillable = [ 'name','deskripsi','file','link'];
    protected $table = 'sliders';


}
