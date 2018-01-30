<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game_organizers extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'game_organizers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['name', 'email', 'password'];
    protected $guarded = ['id','created_at','updated_at'];
	
	// public function player(){
		// return $this->hasOne('\App\Players', 'id', 'champion');
	// }
	
	public function game(){
		return $this->hasOne('\App\Games', 'id', 'game_id');
	}
	
	public function organizer(){
		return $this->hasOne('\App\Organizers', 'id', 'organizer_id');
	}
}
