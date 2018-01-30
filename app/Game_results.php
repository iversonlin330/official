<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game_results extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'game_results';
	
	protected $casts = [
        'rank' => 'integer',
    ];
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['name', 'email', 'password'];
    protected $guarded = ['id','created_at','updated_at'];
	
	public function player(){
		return $this->hasOne('\App\Players', 'id', 'player_id');
	}
	
	// public function game(){
		// return $this->hasOne('\App\Games', 'id', 'game_id');
	// }
	
	// public function signs(){
		// return $this->hasMany('\App\Game_signs', 'group_id', 'id');
	// }
}
