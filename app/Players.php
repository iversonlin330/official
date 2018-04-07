<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'players';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['name', 'email', 'password'];
    protected $guarded = ['id','created_at','updated_at'];
	
	public function player_game(){
		return $this->hasMany('\App\Player_game', 'player_id', 'id');
	}
	
	public function player_d(){
		return $this->hasMany('\App\Player_d', 'player_id', 'id');
	}
	
	public function player_score(){
		return $this->hasMany('\App\Player_score', 'player_id', 'id')->orderBy('game_order','asc');
	}
}
