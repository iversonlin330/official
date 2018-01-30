<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Co_organizers extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'co_organizers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['name', 'email', 'password'];
    protected $guarded = ['id','created_at','updated_at'];
	
	public function game_co_organizers(){
		return $this->hasMany('\App\Game_co_organizers', 'co_organizer_id', 'id');
	}
}
