<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class AddressEditController extends Controller
{
    // public function addressEdit(Request $request)
    // {
        // $address =  Item::find($request->id);
        // return view('user.address', compact('address'));
    // }
    public function addressEdit($id)
    {
        $address =  Item::find($id);
        return view('user.address', compact('address'));
    }
}