<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['userId', 'itemId', 'photo'];

    public function User(){
      return $this->belongsTo('App\User','userId','id');
    }

    public function Item(){
      return $this->belongsTo('App\Item','itemId','id');
    }
}
