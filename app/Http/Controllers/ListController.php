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
        foreach ($product as $key => $value) {
            if (!empty($value)) {
                $data['status']['code'] = 200;
                $data['status']['message'] = 'Found'; 
                $data['data'][] = $value;
            }else{
                $data['status']['code'] = 404;
                $data['status']['message'] = 'Found';
            }
            
        }
        return response($data)->header('Content-Type', 'json');
    }

    public function charts(Request $request)
    {
        $charts = DB::table('charts')->orderby('top','ASC')->get();
        foreach ($charts as $key => $value) {
            if (!empty($value)) {
                $data['status']['code'] = 200;
                $data['status']['message'] = 'Found'; 
                $value->top = $this->ordinal($value->top);
                $data['data'][] = $value;
            }else{
                $data['status']['code'] = 404;
                $data['status']['message'] = 'Found';
            }
            
        }
        return response($data)->header('Content-Type', 'json');
    }

    public function menuoptions(Request $request)
    {
        $menuoptions = array(['id'=> 1, 'title' => 'Reservation', 'image' => ''],
                            ['id' => 2, 'title' => 'Dine In', 'image' => ''],
                            ['id' => 3, 'title' => 'Take Away', 'image' => ''],
                            ['id' => 4, 'title' => 'Autlet', 'image' => '']
                            );
        foreach ($menuoptions as $key => $value) {
            if (!empty($value)) {
                $data['status']['code'] = 200;
                $data['status']['message'] = 'Found'; 
                $data['data'][] = $value;
            }else{
                $data['status']['code'] = 404;
                $data['status']['message'] = 'Found';
            }
            
        }
        return response($data)->header('Content-Type', 'json');
    }

    public function user(Request $request)
    {
        $product = DB::table('users')->get();
        foreach ($product as $key => $value) {
            if (!empty($value)) {
                $data['status']['code'] = 200;
                $data['status']['message'] = 'Found'; 
                $data['data'][] = $value;
            }else{
                $data['status']['code'] = 404;
                $data['status']['message'] = 'Found';
            }
            
        }
        return response($data)->header('Content-Type', 'json');
    }

    function ordinal($number) {
        $ends = array('th','st','nd','rd','th','th','th','th','th','th');
        if ((($number % 100) >= 11) && (($number%100) <= 13))
            return $number. 'th';
        else
            return $number. $ends[$number % 10];
    }
}
