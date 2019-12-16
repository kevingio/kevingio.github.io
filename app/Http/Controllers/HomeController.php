<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Instagram\Instagram;

class HomeController extends Controller
{
    public function index()
    {
        $instagram = new Instagram('1236147385.1677ed0.8146cd7d31234dd68f49267cc4b78344');
        $results = $instagram->get();
        $count = 0;
        $videoIndex = [];
        foreach ($results as $i => $result) {
            if($result->type == 'image'){
                $count++;
            }else {
                $videoIndex[] = $i;
            }
            if($count == 5){
                break;
            }
        }
        $temp = $videoIndex;
        $deleted = 0;
        foreach ($temp as $value) {
            array_splice($results, $value - $deleted, 1);
        }
        $instagram_data = array_slice($results, 0, 9, true);
        return view('index')->with('instagram', $instagram_data);
    }
}
