<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class CommentController extends Controller
{
    public function comment(Request $request)
    {
        $comment = Item::find($request->id);
        return view('user.comment', compact('comment'));
    }
}
