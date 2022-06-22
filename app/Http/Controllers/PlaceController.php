<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PlaceController extends Controller
{
    public function loaLepu()
    {
        return response()->view('place.loa-lepu');
    }
}
