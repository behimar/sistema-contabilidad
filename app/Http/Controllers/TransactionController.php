<?php

namespace App\Http\Controllers;

use App\Nomenclator;
use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Requests\TransactionRequest;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($num)
    {
        $nomencladores = Nomenclator::all();
        return view('transacciones.transaccion',compact('nomencladores','num'));
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
    public function store(TransactionRequest $request,$num)
    {
        $transaction = new Transaction([
            'nomenclator_id'    => $request['nomenclator_id'],
            'tipo'          => $request['tipo'],
            'monto'         => $request['monto'],
        ]);
        $transaction->account_id = $num;
        $transaction->save();
        Session::flash('message','Registro realizado correctamente');
        return redirect()->action('AccountController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transaction::destroy($id);
        Session::flash('message','Transacción eliminada...');
        return redirect()->back();
    }
}
