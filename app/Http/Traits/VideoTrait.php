<?php

namespace App\Http\Traits;
use App\Models\Video;

trait VideoTrait {

    public function getWatch($id) {
    		$video = Video::findOrFail($id);
    		$nextVideo = Video::where('entity_id',$video->entity_id)
    		->where('season', $video->season)
    		->where('episode', $video->episode+1)->pluck('id')->first();
    		// dd($nextVideo);
        return view('pages.watch', compact('video', 'nextVideo'));
    } // Get Entity By Id



}