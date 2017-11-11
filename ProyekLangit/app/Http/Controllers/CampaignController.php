<?php

namespace ProyekLangit\Http\Controllers;

use ProyekLangit\Campaign;
use ProyekLangit\CampaignPhoto;
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
        //
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
          'name' => 'required|string|max:255',
          'desc' => 'required|string',
          'photo' => 'image',
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
     * @param  \ProyekLangit\Campaign  $campaign
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
     * @param  \ProyekLangit\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ProyekLangit\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ProyekLangit\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        //
    }
}
