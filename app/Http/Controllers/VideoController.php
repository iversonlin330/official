<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class VideoController extends Controller
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
		$videos = \App\Videos::all();
		$data = $videos;
		foreach($data as $key => $val){
			$item = $this->youtube_info($data[$key]['youtube_id']);
			if(!$item)
				continue;
			$item = $item[0];
			$data[$key]['status'] = $item->snippet->liveBroadcastContent;
			$data[$key]['viewCount'] = $item->statistics->viewCount;
			$data[$key]['likeCount'] = $item->statistics->likeCount;
			$data[$key]['commentCount'] = $item->statistics->commentCount;
			// if($data[$key]['pic_id']){
				// $fs = new FileserverController;
				// $data[$key]['pic_url'] = $fs->Path_by_Download($data[$key]['pic_id']);
			// }else{
			$data[$key]['pic_url'] = "https://i.ytimg.com/vi/".$data[$key]['youtube_id']."/maxresdefault.jpg";
			//}
		}
		$videos = $data;
        return view('video.view',compact('videos'));
    }
	
	public function getShow($id){
		$video = \App\Videos::find($id);
		$item = $this->youtube_info($video->youtube_id)[0];
		$status = $item->snippet->liveBroadcastContent;
		return view('video.show',compact('video','status'));
    }
}
