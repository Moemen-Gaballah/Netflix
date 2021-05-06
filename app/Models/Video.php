<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function entity()
    {
        return $this->belongsTo(Entity::class);
    }
}
