<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\ItemPhoto;
class AdminController extends Controller
{
    public function CatalogFP()
    {
      return view('admin.catalog',[
        'data' => Item::orderBy('id','desc')->get()
      ]);
    }

    public function CatalogFPShow(Item $item)
    {
      return view('admin.catalogEdit',[
        'data' => $item
      ]);
    }

    public function CatalogUpdate(Request $request, Item $item)
    {
      $datetime = date("Y-m-d", strtotime($request->date)).' '.$request->time.':00';
      $item->update($request->all());
      $item->dueDate = $datetime;
      $item->save();
      if ($request->photo) {
        foreach ($request->photo as $photo) {
          $path = $photo->store('item', 'public');
          ItemPhoto::create([
            'itemId' => $item->id,
            'photo' => $path
          ]);
        }
      }
      return redirect(route('admin.catalogFp.index'));
    }
}
