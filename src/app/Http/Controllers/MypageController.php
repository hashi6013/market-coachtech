<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class MypageController extends Controller
{
    public function mypageIndex()
    {
        $profiles = Item::all();
        return view('user.mypage', compact('profiles'));
    }

    public function update()
    {
        return view('user.profile');
    }
}