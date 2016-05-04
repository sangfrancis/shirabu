<?php

namespace App\Http\Controllers;

use App\Location;
use App\Restaurant;
use App\Menu;
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
    public function locationDetail($id)
    {
        $restaurant = Restaurant::find($id);

        $data["result"]   = array(
            "code" => 200,
            "message" => "OK"
        );
        $return_arr['id']  = $restaurant->id;
        $return_arr['name']  = $restaurant->name;
        $return_arr['address']  = $restaurant->address;
        $return_arr['tel']  = $restaurant->tel;
        $return_arr['open']  = $restaurant->open;
        $return_arr['close']  = $restaurant->close;
        $return_arr['price_from']  = $restaurant->price_from;
        $return_arr['price_to']  = $restaurant->price_to;
        $data["locations"] = $return_arr;
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
    public function menu($id)
    {
        $menu = Menu::where('restaurant_id',$id)->get();
        $return_arr = array();
        foreach ($menu as $result) {
            $row_array['restaurant_id']  = $result->id;
            $row_array['name'] = $result->name;
            $row_array['price']                     = $result->price;
            $row_array['path']                   = $result->path;
            array_push($return_arr, $row_array);
        }
        $data["result"]   = array(
            "code" => 200,
            "message" => "OK"
        );
        $data["menus"] = $return_arr;
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}