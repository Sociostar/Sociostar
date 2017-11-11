<?php

namespace ProyekLangit;

use Illuminate\Database\Eloquent\Model;

class CampaignPhoto extends Model
{
    protected $fillable = ['campaignId', 'photo'];
    public $timestamps = false;
}
