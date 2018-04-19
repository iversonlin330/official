<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class HomeController extends Controller
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
	
	private function youtube_info($youtube_ids){
		if(is_array($youtube_ids)){
			$youtube_ids = implode(',',$youtube_id);
		}
			
		$key = "AIzaSyBTo6sn9kAI5g0DfbW5DHW7qk8XUjdeUc8";
		$video_ids = $youtube_ids;
		$url = "https://www.googleapis.com/youtube/v3/videos/?id=" . $video_ids ."&part=snippet%2CcontentDetails%2Cstatistics%2CliveStreamingDetails&key=" . $key;

		$ch = curl_init();
 
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$output = curl_exec($ch);
		 
		curl_close($ch);
		$data = [];
		return json_decode($output)->items;
	}
	
    public function getView(){
        return view('forum.view');
    }
	
	 public function index(){
		$video = \App\Videos::where('is_home',1)->first();
		$status = 'none';
		if($video){
			$item = $this->youtube_info($video->youtube_id);
			$item = $item[0];
			$status = $item->snippet->liveBroadcastContent;
		}
		$players = \App\Player_new::orderBy('glicko','desc')->get();
		
		$player_sijhih = new \App\Player_new;
		$player_sijhih = $player_sijhih->setTable('player_sijhih');
		$player_sijhih = $player_sijhih->orderBy('glicko','desc')->get();
		//dd($player_sijhih);
		
		$player_all = new \App\Player_new;
		$player_all = $player_all->setTable('player_all');
		$player_all = $player_all->orderBy('glicko','desc')->get();
		
		$player_student = new \App\Player_new;
		$player_student = $player_student->setTable('player_student');
		$player_student = $player_student->orderBy('glicko','desc')->get();
		
        return view('home_temp',compact('video','status','players','player_sijhih','player_all','player_student'));
    }
}
