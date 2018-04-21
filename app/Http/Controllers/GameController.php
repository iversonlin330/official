<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Auth;

class GameController extends Controller
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
        return view('game.view');
    }
	
	public function getHistory(){
		$games = \App\Games
			::where('end_date', '<' , date('Y-m-d'))
			->get();
        return view('game.history',compact('games'));
    }
	
	public function getUpload(){
		$games = \App\Games::all();
        return view('game.upload',compact('games'));
    }
	
	public function getAddForm(){
        return view('game.add-form');
    }
	
	public function postAddForm(Request $request){
		$user = Auth::user();
		$data = $request->all();
		
		dd('OK');
		//Game
		$data['organizer'] = json_encode($data['organizer']);
		$data['co_organizer'] = json_encode($data['co_organizer']);
		$data['sponsor'] = json_encode($data['sponsor']);
		$game = new \App\Games;
		$game->fill($data);
		$game->save();
		
		//File
		$file = $request->file('rule');
		$extension = $file->getClientOriginalExtension();
		$file_name = date('Ymd_His').'_'.str_random(5).'.'.$extension;
		//$file_name = date('Ymd_His').'_'.$file->getClientOriginalName();
		$destination_path = public_path().'/user-upload/game/';
		if ($request->hasFile('rule')) {
			$upload_success = $file->move($destination_path, $file_name);
			$new_file = new \App\Game_files;
			$new_file->game_id = $game->id;
			$new_file->path = '/user-upload/game/';
			$new_file->file_name = $file_name;
			$new_file->ext = $extension;
			$new_file->file_show_name = $file->getClientOriginalName();
			$new_file->user_id = $user->id;
			$new_file->save();
		} else {
			echo "img upload failed!";
		}
		
		
        return view('game.add-form');
    }
	
	public function getAddGroup($game_id){
        return view('game.add-group');
    }
	
	public function postAddGroup(Request $request,$game_id){
		$user =Auth::user();
		$group_count = \App\Games::find($game_id)->groups->count();
		
		$data = $request->all();
		$data['game_id'] = $game_id;
		$data['user_id'] = $user->id;
		$data['group_name'] = chr($group_count+65);
		$group = new \App\Game_groups;
		$group->fill($data);
		$group->save();
		
		return redirect('/game/upload');
    }
	
	public function getDownload($id){
		$game_file = \App\Game_files::find($id);
		$filename = $game_file->file_show_name;
		$path = public_path() . $game_file->path . $game_file->file_name;
		return response()->download($path, $filename);
    }
	
	public function getOverview($id){
		$game = \App\Games::find($id);
        return view('game.overview',compact('game'));
    }
	
	public function getSign(){
		$user = Auth::user();
		$games = \App\Games
			::where('end_date', '>' , date('Y-m-d'))
			->get();
        return view('game.sign',compact('games','user'));
    }
	
	public function getSignUp($group_id){
		$group = \App\Game_groups::find($group_id);
        return view('game.sign-up',compact('group'));
    }
	
	public function postSignUp($group_id){
		$group = \App\Game_groups::find($group_id);
		$user = Auth::user();
		
		$game_sign = new \App\Game_signs;
		$game_sign->game_id = $group->game_id;
		$game_sign->group_id = $group_id;
		$game_sign->player_id = $user->player_id;
		$game_sign->user_id = $user->id;
		$game_sign->save();
		
        return back();
    }
	
	public function getManage($status){
		if($status == 'ongoing'){
			$games = \App\Games
			::where('game_date','>',date('Y-m-d'))
			->get();
		}else{
			$games = \App\Games::all();
		}
        
        return view('game.manage',compact('games'));
    }
	
	public function getSignDetail($game_id){
		$game = \App\Games::find($game_id);
        return view('game.sign-detail',compact('game'));
    }
	
	public function getElo(){
        return view('game.elo',compact(''));
    }
	
	public function getSignTemp(){
		$user = Auth::user();
		$games = \App\Game_temps
			//::where('end_date', '>' , date('Y-m-d'))
			::orderBy('game_date')
			->get();
        return view('game.sign-temp',compact('games','user'));
    }
	
	public function getSignTempAdd(){
		$user = Auth::user();
        return view('game.sign-temp-add',compact('games','user'));
    }
	
	public function postSignTempAdd(Request $request){
		$user = Auth::user();
		$data = $request->all();
		$data['user_id'] = $user->account;
		$game_temp = new \App\Game_temps;
		$game_temp->fill($data);
		$game_temp->save();
		
		return redirect('game/sign-temp');
        //return view('game.sign-temp-add',compact('games','user'));
    }
	
	public function getHighlight(){
		$user = Auth::user();
		$highlights = \App\Game_highlights::all();
        return view('game.highlight',compact('user','highlights'));
    }
	
	public function getHighlightAdd(){
		$user = Auth::user();
        return view('game.highlight-add',compact('user'));
    }
	
	public function getHighlightDetail($id){
		$user = Auth::user();
		$highlight = \App\Game_highlights::find($id);
        return view('game.highlight-detail',compact('user','highlight'));
    }
	
	public function getPlaybook(){
		$user = Auth::user();
		$playbooks = \App\Game_playbook::all();
        return view('game.playbook',compact('user','playbooks'));
    }
	
	public function getPlaybookDetail($id){
		$user = Auth::user();
		$playbook = \App\Game_playbook::find($id);
        return view('game.playbook-detail',compact('user','playbook'));
    }
}
