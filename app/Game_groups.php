<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game_groups extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'game_groups';

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
	
	public function game(){
		return $this->hasOne('\App\Games', 'id', 'game_id');
	}
	
	public function signs(){
		return $this->hasMany('\App\Game_signs', 'group_id', 'id');
	}
	
	public function game_results(){
		return $this->hasMany('\App\Game_results', 'game_group_id', 'id');
	}
}
