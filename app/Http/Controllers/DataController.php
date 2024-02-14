<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
    public function index(){
        $collection=Http::get("https://jsonplaceholder.typicode.com/photos");
        return view('data',['collection'=>$collection->collect()]);
    }
}
