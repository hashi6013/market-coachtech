<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function comment(Request $request)
    {
        $comment = Item::find($request->id);
        $user = Auth::user();
        return view('user.comment', compact('comment', 'user'));
    }
}
