<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = ['userId', 'title', 'desc', 'status'];

    public function Photo(){
      return $this->hasMany('App\CampaignPhoto','campaignId','id');
    }

    public function User(){
      return $this->belongsTo('App\User','userId','id');
    }
}
