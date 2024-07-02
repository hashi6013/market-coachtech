<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function mypageIndex()
    {
        $users = Auth::user();
        $profiles = Item::all();
        return view('user.mypage', compact('users', 'profiles'));
    }

    public function update()
    {
        return view('user.profile');
    }
}