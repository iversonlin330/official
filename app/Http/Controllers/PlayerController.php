<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
use Illuminate\Http\Request;

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
        $players = \App\Players::with('player_vote')->get();
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
			::where('user_id',$user->id)
			->where('vote_date',date('Y-m-d'))
			->first();
        return view('player.vote',compact('player','vote'));
    }
	
	public function postVote($player_id){
		$user = Auth::user();
		
		$vote = new \App\Player_votes;
		$vote->player_id = $player_id;
		$vote->vote_date = date('Y-m-d');
		$vote->user_id = $user->id;
		$vote->save();
		
		return back();
    }
	
	public function getShow($id){
		$user = Auth::user();
		$player = \App\Players::find($id);
		
        return view('player.show',compact('player'));
    }
		
	public function getExcel(){
		$user = Auth::user();
		
        return view('player.excel');
    }
	
	public function postExcel(Request $request){
		$user = Auth::user();
		$file = $request->file('import_file');
		/*
		$excel = \Excel::load($file,function($reader) {
			$reader->each(function($sheet) {
				//dd($sheet);
				Log::warning("sheet happens");

				// Loop through rows            
				$sheet->each(function($row) {
					Log::warning($row);
				});

			});
			
		})->all()->toArray();
		*/
		//$rt = \Excel::load($file, function($reader) {
		//})->get();
		$excel = \Excel::load($file)->all()->toArray();
		dd($excel);
        return view('player.excel');
    }
}
