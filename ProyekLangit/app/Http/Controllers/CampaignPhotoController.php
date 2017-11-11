<?php

namespace App\Http\Controllers;

use App\CampaignPhoto;
use Illuminate\Http\Request;
use Storage;
class CampaignPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CampaignPhoto  $campaignPhoto
     * @return \Illuminate\Http\Response
     */
    public function show(CampaignPhoto $campaignPhoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CampaignPhoto  $campaignPhoto
     * @return \Illuminate\Http\Response
     */
    public function edit(CampaignPhoto $campaignPhoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CampaignPhoto  $campaignPhoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CampaignPhoto $campaignPhoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CampaignPhoto  $campaignPhoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $photo = CampaignPhoto::find($request->id);
      Storage::disk('public')->delete($photo->photo);
      $photo->delete();
      return redirect(route('campaign.show',['campaign' => $photo->campaignId]));
    }
}
