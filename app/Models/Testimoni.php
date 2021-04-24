<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Testimoni extends Model
{
    // public $attributes = [ 'hits' => 0 ];

    protected $fillable = [ 'users_id','name','deskripsi','file','link'];
    protected $table = 'testimoni';


}
