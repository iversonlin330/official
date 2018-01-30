<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizers extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'organizers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['name', 'email', 'password'];
    protected $guarded = ['id','created_at','updated_at'];
	
	public function game_organizers(){
		return $this->hasMany('\App\Game_organizers', 'organizer_id', 'id');
	}
}
