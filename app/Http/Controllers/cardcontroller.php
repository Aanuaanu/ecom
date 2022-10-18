<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\card;
use Session;
class cardcontroller extends Controller
{
    function card(Request $req) {
        if($req->session()->has('user')){
$card=new card;
$card->userid=$req->session()->get('user')['id'];
$card->productid=$req->pid;
      $card->save();
      return redirect('/product');
    }
    else
    {
        return redirect('/login');
    }
}

 static function carditem(){
    $userid=Session::get('user')['id'];
    return card::where('userid', $userid)->count();
}

}
