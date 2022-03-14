<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ListController extends Controller
{
    //
    public function show(){

        $data =  Item::all();
        return view('list',compact('data'));
    }
}
