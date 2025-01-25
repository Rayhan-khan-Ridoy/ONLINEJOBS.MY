<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\State;

class StateController extends Controller
{
    public function index()
    {
        return response()->json([
            'success'=>true,
            'data'=> State::select('id','country_id','name','code')->where('status','1')->get(),
            'message'=>'States data fetch success'
        ],200);
    }

    public function getStates($country_id)
    {
        try {
            $states = State::select('id', 'name')
                           ->where('country_id', $country_id)
                           ->where('status', 1)  // Optional: Filter by status if needed
                           ->get();

            if ($states->isEmpty()) {
                return response()->json(['message' => 'No states found'], 404);
            }

            return response()->json($states);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to fetch states', 'error' => $e->getMessage()], 500);
        }
    }
}
