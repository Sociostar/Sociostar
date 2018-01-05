<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Item extends Model
{
    use SoftDeletes;
    protected $fillable = ['userId', 'name', 'noteFP', 'desc', 'price', 'amount', 'dueDate', 'status'];
    protected $dates = ['deleted_at'];
    public function User(){
      return $this->belongsTo('App\User','userId','id');
    }

    public function Photo(){
      return $this->hasMany('App\ItemPhoto','itemId','id');
    }
}
