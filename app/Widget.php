<?php

namespace App;
use App\User;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    protected $fillable = ['name', 'slug', 'user_id'];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function getCreatedAtAttribute($value) {
        return Carbon::parse($value)->format('m-d-y');
    }

}
