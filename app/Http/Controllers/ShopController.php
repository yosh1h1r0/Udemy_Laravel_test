<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Shop;
use App\Models\Models\Area;



class ShopController extends Controller
{
    public function index()
    {
        $area_tokyo = Area::find(2)->Shops;


        $shop = Shop::find(1)->area->id;


        $route_shop = Shop::find(2)->routes()->get();


        dd($route_shop);
    }
}
