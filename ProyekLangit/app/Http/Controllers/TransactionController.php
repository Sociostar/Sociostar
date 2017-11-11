<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Item;
use Illuminate\Http\Request;
use Auth;
use Storage;
class TransactionController extends Controller
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
      return view('transaction.self',[
        'data' => Transaction::where([
          ['userId',Auth::id()],
          ['photo',null]
          ])->get()
      ]);
    }

    public function history(){
      return view('transaction.history',[
        'data' => Transaction::where([
          ['userId', Auth::id()],
          ['photo', '!=' , null]
          ])->get()
      ]);
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
        Transaction::create($request->all());
        Item::find($request->itemId)->update([
          'status' => 1
        ]);
        return redirect(route('transaction.self'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    public function confirmation(Request $request, Transaction $transaction){
      $path = $request->photo->store('confirmation', 'public');
      $transaction->photo = $path;
      $transaction->save();
      return redirect(route('transaction.history'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        Item::find($transaction->itemId)->update([
          'status' => 0
        ]);
        return redirect(route('transaction.self'));
    }
}
