<?php

namespace App\Http\Traits;
use App\Models\Category;

trait CategoryTrait {

    public function getAllCategories() {
        $categories = Category::whereHas('entities')->with('entities')->get();
        return $categories;
    }


    public function getAllMovies() {
		$categories = Category::with('entities')->whereHas('entities', function ($query){
				$query->whereHas('videos', function ($q){
					$q->where('isMovie', '1');
				});
			})->get();
		
        return $categories;

    }


}