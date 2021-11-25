<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ListController extends Controller
{

    public function product(Request $request)
    {
        $product = DB::table('products')->get();
        $data = [];
        foreach ($product as $key => $value) {
            if (!empty($value)) {
                $data['status']['code'] = 200;
                $data['status']['message'] = 'Found'; 
                $data['data'] = $value;
            }else{
                $data['status']['code'] = 404;
                $data['status']['message'] = 'Found';
            }
            
        }
        return response($data)->header('Content-Type', 'json');
    }

    public function charts(Request $request)
    {
        $charts = DB::table('charts')->get();
        $data = [];
        foreach ($charts as $key => $value) {
            if (!empty($value)) {
                $data['status']['code'] = 200;
                $data['status']['message'] = 'Found'; 
                $data['data'] = $value;
            }else{
                $data['status']['code'] = 404;
                $data['status']['message'] = 'Found';
            }
            
        }
        return response($data)->header('Content-Type', 'json');
    }
}
