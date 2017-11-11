<?php

namespace App\Http\Controllers;

use App\Item;
use App\ItemPhoto;
use Illuminate\Http\Request;
use Auth;
use Storage;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('item.index',[
          'data' => Item::all()
        ]);
    }

    public function self(){
      return view('item.self',[
        'data' => Item::where('userId',Auth::id())->get()
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
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
        'price' => 'required|numeric'
      ]);
      $item = Item::create([
        'userId' => Auth::user()->id,
        'title' => $request->title,
        'desc' => $request->desc,
        'price' => $request->price,
      ]);
      foreach ($request->photo as $photo) {
        $path = $photo->store('item', 'public');
        ItemPhoto::create([
          'itemId' => $item->id,
          'photo' => $path
        ]);
      }
      return redirect(route('item.self'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('item.show',[
          'data' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('item.edit',[
          'data' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
      $request->validate([
        'title' => 'required|string|max:255',
        'desc' => 'required|string',
        'price' => 'required|numeric'
      ]);
      $item->title = $request->title;
      $item->desc = $request->desc;
      $item->price = $request->price;
      $item->save();
      foreach ($request->photo as $photo) {
        $path = $photo->store('item', 'public');
        ItemPhoto::create([
          'itemId' => $item->id,
          'photo' => $path
        ]);
      }
      return redirect(route('item.self'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
      foreach ($item->Photo as $row) {
        $photo = ItemPhoto::find($row->id);
        Storage::disk('public')->delete($photo->photo);
        $photo->delete();
      }
      $item->delete();
      return redirect(route('item.self'));
    }
}
