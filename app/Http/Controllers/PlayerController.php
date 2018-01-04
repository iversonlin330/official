<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;

class PlayerController extends Controller
{

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest', ['except' => 'getLogout']);
    }

    public function getView(){
        $players = \App\Players::all();
        return view('player.view',compact('players'));
    }
	
	public function getDialog($id){
        $player = \App\Players::find($id);
        return view('player.dialog',compact('player'));
    }
	
	public function getStar(){
        $players = \App\Players::all();
        return view('player.star',compact('players'));
    }
	
	public function getVote($player_id){
        $user = Auth::user();
		$player = \App\Players::find($player_id);
		$vote = \App\Player_votes
			::where('player_id',$player_id)
			->where('user_id',$user->id)
			->first();
        return view('player.vote',compact('player','vote'));
    }
	
	public function postVote($id){
		$user = Auth::user();
		$vote = new \App\Player_votes;
        $players = \App\Players::all();
        return view('player.star',compact('players'));
    }
}
