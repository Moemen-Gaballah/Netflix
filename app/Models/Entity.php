<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    use HasFactory;

    public $timestamps = false;

	public function first_videos()
    {
        return $this->hasMany(Video::class)->first();
    }

	public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
