<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    public function index()
    {
        return response()->json([
            'success'=>true,
            'data'=> City::select('id','state_id','name','code')->where('status','1')->get(),
            'message'=>'City data fetch success'
        ],200);
    }

    public function getCities($state_id)
    {
        try {
            $cities = City::select('id', 'name')
                          ->where('state_id', $state_id)
                          ->where('status', 1)  // Optional: Filter by status if needed
                          ->get();

            if ($cities->isEmpty()) {
                return response()->json(['message' => 'No cities found'], 404);
            }

            return response()->json($cities);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to fetch cities', 'error' => $e->getMessage()], 500);
        }
    }
}
