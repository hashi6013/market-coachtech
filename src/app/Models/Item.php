<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'condition_id',
        'name',
        'price',
        'description',
        'image_url'
    ];

    public function categories() {
        return $this->belongsToMany('App\Models\Category');
    }

    public function condition() {
        return $this->belongsTo('App\Models\Condition');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function favorites() {
        return $this->hasMany('App\Models\Favorite');
    }

    public function favorite_by_auth_user()
    {
        $id = Auth::id();

        $checkers = array();
        foreach($this->favorites as $favorite) {
            array_push($checkers, $favorite->user_id);
        }
        if (in_array($id, $checkers)) {
            return true;
        }else {
            return false;
        }
    }
}