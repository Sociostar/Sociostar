<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemPhoto extends Model
{
    protected $fillable = ['itemId', 'photo'];
    public $timestamps = false;
}
