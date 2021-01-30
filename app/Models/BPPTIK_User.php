<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class BPPTIK_User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /**
	 * Table Name
	 * 
	 * @var string
	 */
    protected $table = "bpptik_users"; 

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
