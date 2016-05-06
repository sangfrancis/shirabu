<?php

namespace App\Http\Controllers;

use App\Location;
use App\Restaurant;
use App\Article;
use App\Comment;
use App\Customer;
use App\CustomerFile;
use App\Detail;
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
        if (is_null($restaurant)) {
            return $this->badRequest();
        }
        $data["result"]   = array(
            "code" => 200,
            "message" => "OK"
        );
        $type = "";
        foreach ($restaurant->category as $category) {
            if ($type == "") {
                $type = $category->name;
            } else 
            $type = $type.", ".$category->name;
        }
        $return_arr['id']  = $restaurant->id;
        $return_arr['type']  = $type;
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
        if ($menu == null) {
            return $this->badRequest();
        }
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
    public function article(Request $r)
    {
        $restaurant_id = 0;
        if (!is_null($r->get('restaurant_id'))) {
            $restaurant_id = $r->get('restaurant_id');
        $article = Article::where('restaurant_id',$restaurant_id)->orderBy('id','desc')->limit(2)->get();
        } else {
        $article = Article::orderBy('id','desc')->limit(4)->get();
        }
        if (is_null($article)) {
            return $this->badRequest();
        }
        $return_arr = array();
        foreach ($article as $result) {
            $row_array['restaurant_id']  = $result->restaurant_id;
            $row_array['id']  = $result->id;
            // $row_array['author'] = $result->author;
            // $row_array['title']                     = $result->title;
            // $row_array['body']                     = $result->body;
            $row_array['path']                   = $result->path;
            array_push($return_arr, $row_array);
        }
        $data["result"]   = array(
            "code" => 200,
            "message" => "OK"
        );
        $data["articles"] = $return_arr;
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
    public function articleDetail($id)
    {
        $article = Article::find($id);
        if (is_null($article)) {
            return $this->badRequest();
        }
        $data["result"]   = array(
            "code" => 200,
            "message" => "OK"
        );
        $return_arr['id']  = $id;
        $return_arr['author']  = $article->author;
        $return_arr['title']  = $article->title;
        $return_arr['body']  = $article->body;
        $return_arr['path']  = $article->path;
        $return_arr['restaurant_id']  = $article->restaurant_id;
        $data["articles"] = $return_arr;
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
    public function detail($id)
    {
        $detail = Detail::find($id);
        if (is_null($detail)) {
            return $this->badRequest();
        }
        $data["result"]   = array(
            "code" => 200,
            "message" => "OK"
        );
        $return_arr['id']  = $id;
        $return_arr['capacity']  = $detail->capacity;
        $return_arr['prepare']  = $detail->prepare;
        $return_arr['holiday']  = $detail->holiday;
        $return_arr['facility']  = $detail->facility;
        $return_arr['style']  = $detail->style;
        $return_arr['special']  = $detail->special;
        $return_arr['restaurant_id']  = $detail->restaurant_id;
        $data["detail"] = $return_arr;
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
    public function comment($id)
    {
        $comments = Comment::where('restaurant_id',$id)->get();
        if (is_null($comments)) {
            return $this->badRequest();
        }
        $data["result"]   = array(
            "code" => 200,
            "message" => "OK"
        );
        $return_arr = array();
        foreach ($comments as $result) {
            $row_array['restaurant_id']  = $result->restaurant_id;
            $row_array['id']  = $result->id;
            $row_array['customer_id'] = $result->customer_id;
            $first_name = $result->customer->first_name;
            $last_name = $result->customer->last_name;
            $row_array['customer_name'] = "$first_name $last_name";
            $row_array['like']                     = $result->like;
            $row_array['body']                     = $result->body;
            $row_array['path']                   = $result->customer->file?$result->customer->file->path:"";
            array_push($return_arr, $row_array);
        }
        $data["comments"] = $return_arr;
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
    public function commentSave($id, Request $r)
    {
        $data = Input::get();
        $fillData = array ('body' => $data['body'], 
                           'customer_id' => $data['customer_id'], 
                           'restaurant_id' => $id, 
                           'like' => $data['like'] 
                           );
        $comment = new Comment();
        $comment->fill($fillData);
        $comment->save();

        $data["result"]   = array(
            "code" => 200,
            "message" => "OK"
        );
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
    public function badRequest()
    {
        $returnData["result"] = array(
            "code" => 400,
            "message" => "Bad Request"
        );
        echo json_encode($returnData, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}