<?php

namespace App\Http\Controllers;

use App\ItemPhoto;
use Illuminate\Http\Request;
use Storage;
class ItemPhotoController extends Controller
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
     * @param  \App\ItemPhoto  $itemPhoto
     * @return \Illuminate\Http\Response
     */
    public function show(ItemPhoto $itemPhoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ItemPhoto  $itemPhoto
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemPhoto $itemPhoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ItemPhoto  $itemPhoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemPhoto $itemPhoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ItemPhoto  $itemPhoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $photo = ItemPhoto::find($request->id);
        Storage::disk('public')->delete($photo->photo);
        $photo->delete();
        return redirect(route('item.show',['item' => $photo->itemId]));
    }
}
