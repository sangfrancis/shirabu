<?php

namespace App\Http\Controllers;

use App\Location;
use App\Http\Requests;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Illuminate\Support\Facades\View;

class APIController extends Controller
{
	public function location(Request $r)
    {
    	$lat = $r->get('lat');
    	$lng = $r->get('lng');
    	$distance = 10;
    	$query = "SELECT *, SQRT( POW(69.1 * (lat - $lat), 2) + POW(69.1 * ($lng - lng) * COS(lat / 57.3), 2)) AS distance FROM locations HAVING distance <= 1 ORDER BY distance";
    	$results = DB::select(DB::raw($query));
    	$return_arr = array();
        foreach ($results as $result) {
            $row_array['restaurant_id']  = $result->id;
            $row_array['restaurant_name'] = Location::find($result->id)->restaurant->name;
            $row_array['lng']                     = $result->lng;
            $row_array['lat']                   = $result->lat;
            $row_array['distance']                   = $result->distance;//aaaaa
            array_push($return_arr, $row_array);
        }
        $data["result"]   = array(
            "code" => 200,
            "message" => "OK"
        );
        $data["locations"] = $return_arr;
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}