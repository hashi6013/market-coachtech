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
        return view('user.index', compact('items'));
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
        $categories = Category::all();
        $conditions = Condition::all();
        return view('user.sell', compact('categories', 'conditions'));
    }

    public function sellDone(Request $request)
    {
        $request['user_id'] = Auth::user()->id;
        $sell = $request->only([
            'user_id',
            'condition_id',
            'name',
            'price',
            'description',
            'image_url',
        ]);
        Item::create($sell);
        return view('user.done');
    }
}