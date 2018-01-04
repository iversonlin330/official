<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
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

    public function getVerify(){
		$players = \App\Players::all();
        return view('user.verify',compact('players'));
    }
	
	public function postVerify(Request $request){
		$user = Auth::user();
		$data = $request->all();		
		//dd($data);
		$user->fill($data);
		$user->save();
		$players = \App\Players::all();
        return view('user.verify',compact('players'));
    }
	
	public function getGame(){
		$user = Auth::user();
		$game_signs = \App\Game_signs
			::where('user_id',$user->id)
			->get();
        return view('user.game',compact('game_signs'));
    }
}
