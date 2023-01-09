<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //
    public function store(Request $request)
    {
        if($request->status == config('const.orders.recept')){
            // 処理
        }

        // insert
        User::create(['status' => config('const.orders.recept')]);
    }
}
