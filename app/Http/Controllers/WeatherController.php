<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index($location)
    {
        $weather = Http::get("https://wttr.in/{$location}?format=j1")->json();
        $currentTemp = $weather["current_condition"][0]["temp_C"];
        $currentCondition = $weather["current_condition"][0]["weatherDesc"][0]["value"];
        $country = $weather["nearest_area"][0]["country"][0]["value"];
        
        return view("index", compact("currentTemp","currentCondition","country","location"));
    }
}
