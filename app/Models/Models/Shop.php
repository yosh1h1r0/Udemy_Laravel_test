<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Models\Area;

class Shop extends Model
{
    use HasFactory;
    public function area()
    {
        return $this->belongsTo('App\Models\Models\Area');
    }
    public function routes()
    {
        return $this->belongsToMany('App\Models\Models\Route');
    }
}
