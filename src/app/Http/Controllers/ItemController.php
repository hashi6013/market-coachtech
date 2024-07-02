<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\CategoryItem;
use App\Models\Condition;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::with('condition')->get();
        $users = Auth::user();
        $favorite = Favorite::where('user_id', '=', Auth::user()->id)->get();
        return view('user.index', compact('items', 'users', 'favorite'));
    }

    public function search(Request $request)
    {
        $query = Item::query();
        $query = $this->getSearchQuery($request, $query);
        $items = $query->get();
        return view('user.index', compact('items'));
    }

    private function getSearchQuery($request, $query)
    {
        if(!empty($request->keyword)) {
            $query->where('name', 'like', '%' . $request->keyword . '%');
        }
        return $query;
    }

    public function itemDetail($id)
    {
        $item_detail = Item::find($id);
        $categories = categoryItem::where('item_id', '=', $id)->get();
        return view('user.item', compact('item_detail', 'categories'));
    }


    public function sell()
    {
        return view('user.sell');
    }

    public function list()
    {
        $users = Auth::user();
        $favorites = Favorite::where('user_id', '=', Auth::user()->id)->get();
        $image = Favorite::with('item')->get();
        return view('user.list', compact('favorites', 'users', 'image'));
    }
}