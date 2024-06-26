<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class PurchaseController extends Controller
{
    public function purchase($id)
    {
        $purchase = Item::find($id);
        return view('user.purchase', compact('purchase'));
    }
}