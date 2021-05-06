<?php

namespace App\Http\Traits;
use Illuminate\Http\Request;
use App\Models\VideoProgress;

trait VideoProgressTrait {

    public function getProgress(Request $request) {
    	return $getProgress = VideoProgress::where('user_id', $request->user_id)->where('video_id', $request->video_id)->pluck('progress')->first();
    	

    } 

    public function addDuration(Request $request) {
    	$getProgress = VideoProgress::where('user_id', $request->user_id)->where('video_id', $request->video_id)->first();

    	// dd($request->all());
    	if($getProgress == NULL){
	    	$VideoProgress = new VideoProgress();
	    	$VideoProgress->user_id = $request->user_id;
	    	$VideoProgress->video_id = $request->video_id;
	    	$VideoProgress->save();
	    }


    } 

    public function updateDuration(Request $request) {
    	$getProgress = VideoProgress::where('user_id', $request->user_id)->where('video_id', $request->video_id)->first();
	    	$getProgress->user_id = $request->user_id;
	    	$getProgress->video_id = $request->video_id;
	    	$getProgress->progress = $request->progress;
	    	$getProgress->save();
    }


    public function setFinished(Request $request) {
		$getProgress = VideoProgress::where('user_id', $request->user_id)->where('video_id', $request->video_id)->first();
    	$getProgress->user_id = $request->user_id;
    	$getProgress->video_id = $request->video_id;
    	$getProgress->progress = 0;
    	$getProgress->finished = 1;
    	$getProgress->save();
    }



}