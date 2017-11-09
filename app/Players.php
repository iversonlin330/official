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
}