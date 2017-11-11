<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['userId', 'title', 'desc', 'price', 'status'];

    public function User(){
      return $this->belongsTo('App\User','userId','id');
    }

    public function Photo(){
      return $this->hasMany('App\ItemPhoto','itemId','id');
    }
}
