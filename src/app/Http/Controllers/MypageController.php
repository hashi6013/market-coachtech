<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Profile;
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
        $users = Auth::user();
        return view('user.profile');
    }

    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;
        $profile = $request->only([
            'user_id',
            'postcode',
            'address',
            'building',
        ]);
        Profile::create($profile);
        // return view('user.done');
    }
}