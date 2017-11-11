<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\CampaignPhoto;
use Illuminate\Http\Request;
use Auth;
use Storage;
class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('campaign.index',[
          'data' => Campaign::all()
        ]);
    }

    public function self(){
      return view('campaign.self',[
        'data' => Campaign::where('userId',Auth::id())->get()
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('campaign.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'title' => 'required|string|max:255',
          'desc' => 'required|string',
        ]);
        $campaign = Campaign::create([
          'userId' => Auth::user()->id,
          'title' => $request->title,
          'desc' => $request->desc,
          'status' => 1,
        ]);
        foreach ($request->photo as $photo) {
          $path = $photo->store('campaign', 'public');
          CampaignPhoto::create([
            'campaignId' => $campaign->id,
            'photo' => $path
          ]);
        }
        return redirect(route('campaign.self'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign)
    {
        return view('campaign.show',[
          'data' => $campaign
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        return view('campaign.edit',[
          'data' => $campaign
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
    {
        $request->validate([
          'title' => 'required|string|max:255',
          'desc' => 'required|string',
        ]);
        $campaign->title = $request->title;
        $campaign->desc = $request->desc;
        $campaign->save();
        if(isset($request->photo)){
          foreach ($request->photo as $photo) {
            $path = $photo->store('campaign', 'public');
            CampaignPhoto::create([
              'campaignId' => $campaign->id,
              'photo' => $path
            ]);
          }
        }
        return redirect(route('campaign.show',['campaign' => $campaign->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        foreach ($campaign->Photo as $row) {
          $photo = CampaignPhoto::find($row->id);
          Storage::disk('public')->delete($photo->photo);
          $photo->delete();
        }
        $campaign->delete();
        return redirect(route('campaign.self'));
    }
}
