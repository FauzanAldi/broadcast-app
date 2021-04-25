<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Contact extends Model
{
    // public $attributes = [ 'hits' => 0 ];

    protected $fillable = [ 'nama','email','whatsapp','pesan'];
    protected $table = 'contact';


}
