<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Subscriber extends Model
{
    // public $attributes = [ 'hits' => 0 ];

    protected $fillable = [ 'nama','email','whatsapp'];
    protected $table = 'subcriber';


}
