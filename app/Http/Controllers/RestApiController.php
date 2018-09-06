<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RestApiController extends Controller
{
    public function getUser()
    {
    	$data = User::get();

        $results = new \stdClass;
        $results->users = $data;
        
        if ($results) {
	        return response()->json([
                'status' => 2000,
                'message' => 'Success get data user.',
                'data' => $results
            ], 200);
    	} else {
    		return response()->json([
                'status' => 4000,
                'message' => 'Data is empty.',
                'data' => []
            ], 400);
    	}
    }
}
