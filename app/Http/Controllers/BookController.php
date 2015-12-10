<?php

namespace App\Http\Controllers;

use App\Nomenclator;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //select * from transactions left join accounts on transactions.account_id = accounts.id order by nomenclator_id;
        $libros = DB::table('transactions')
            ->join('accounts','transactions.account_id','=','accounts.id')
            ->join('nomenclators','transactions.nomenclator_id','=','nomenclators.id')
            ->orderBy('nomenclator_id')
            ->select('nomenclator_id','tipo','monto','account_id','glosa','accounts.created_at','cuenta')
            ->get();
        $cuentas = DB::table('transactions')
            ->select('nomenclator_id','cuenta')
            ->join('nomenclators','transactions.nomenclator_id','=','nomenclators.id')
            ->distinct()->get();
        //return $cuentas;
        $saldo =0; $suDe=0; $suHa=0;
        return view('mayores.mayores',compact('libros','cuentas','saldo','suDe','suHa'));
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
        //
    }
}
