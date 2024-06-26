<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function favorite($id)
    {
        Favorite::create([
            'item_id' => $id,
            'user_id' => Auth::id()
        ]);
        return redirect()->back();
    }

    public function unlike($id)
    {
        $favorite = Favorite::where('item_id', $id)->where('user_id', Auth::id())->first();
        $favorite->delete();
        return redirect()->back();
    }
}