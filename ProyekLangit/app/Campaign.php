<?php

namespace ProyekLangit;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = ['userId', 'title', 'desc', 'status'];

    public function Photo(){
      return $this->hasMany('ProyekLangit\CampaignPhoto','campaignId','id');
    }
}
