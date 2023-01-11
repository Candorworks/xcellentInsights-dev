<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function getStatess(Request $request)
    {
        $states = getStates($request->country);
        $html='';
        foreach($states as $item){
            $html.="<option value='".$item['state_name']."'>".$item['state_name']." </option>";
        }
        return response()->json(["states" => $html]);
    }
}
