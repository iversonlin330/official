<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsors extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sponsors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['name', 'email', 'password'];
    protected $guarded = ['id','created_at','updated_at'];
	
	public function game_sponsors(){
		return $this->hasMany('\App\Game_sponsors', 'sponsor_id', 'id');
	}
}
