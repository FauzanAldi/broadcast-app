<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BPPTIK_Queue extends Model
{
	/**
	 * Table Name
	 * 
	 * @var string
	 */
    protected $table = "bpptik_queue"; 

    /**
	 * Primary Key
	 *  
	 * @var string
	 */
    protected $primaryKey = "id"; 

    /**
     * Category 
     * 
     * @return object 
     */

    public $fillable = ['users_id','created_at','updated_at']; 
}
