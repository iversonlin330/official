<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'games';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['name', 'email', 'password'];
    protected $guarded = ['id','created_at','updated_at'];
	
	public function player(){
		return $this->hasOne('\App\Players', 'id', 'champion');
	}
}
