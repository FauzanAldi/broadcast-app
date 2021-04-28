<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Tracker extends Model
{
    // public $attributes = [ 'hits' => 0 ];

    protected $fillable = [ 'ip','category_id','ket'];
    protected $table = 'tracker';

    // public static function boot() {
    //     // Any time the instance is updated (but not created)
    //     static::saving( function ($tracker) {
    //         // $tracker->visit_time = date('H:i:s');
    //         $tracker->hits++;
    //     } );
    // }

    public static function hit() {
        static::Create([
                  'ip'   => $_SERVER['REMOTE_ADDR'],
                  // 'date' => date('Y-m-d'),
              ])->save();
    }

    public static function hits($category_id,$ket=null) {
        static::Create([
                  'ip'   => $_SERVER['REMOTE_ADDR'],
                  'category_id' => $category_id,
                  'ket' => $ket
                  // 'date' => date('Y-m-d'),
              ])->save();
    }
}
