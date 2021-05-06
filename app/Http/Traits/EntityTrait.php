<?php

namespace App\Http\Traits;
use App\Models\Entity;

trait EntityTrait {

    public function getRandomEntity() {
		$entity = Entity::inRandomOrder()->with(['videos' => function ($query){
			$query->first();
		}])->first();

        return $entity;
    }


    public function getRandomEntityForMovie() {
		$entity = Entity::inRandomOrder()->whereHas('videos', function ($query){
			$query->where('isMovie', '1');
		})->first();

        return $entity;
    }

    public function getEntity($id) {
    		$entity = Entity::findOrFail($id);
    		$seasons = $entity->videos->groupBy('season');
        return view('pages.entity', compact(['entity', 'seasons']));
    } // Get Entity By Id



}