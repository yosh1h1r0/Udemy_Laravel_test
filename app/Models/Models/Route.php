<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    public function shops()
    {
        return $this->belongsToMany('App\Models\Models\Shop');
    }
}
