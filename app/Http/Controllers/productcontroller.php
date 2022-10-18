<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;
class productcontroller extends Controller
{
    //
    function index()
    {
        $users = DB::select('select * from product');
     return view('product',['users'=>$users]);

    }

}
