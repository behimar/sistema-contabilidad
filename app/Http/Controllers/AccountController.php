<?php

namespace App\Http\Controllers;

use App\Account;
use App\Nomenclator;
use App\Transaction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests\AccountRequest;
use \Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date =Carbon::now();
        //$date = $date->format('l jS \\of F Y');
        $date = $date->format('d-m-Y');
        $numeros = DB::table('accounts')
            ->orderBy('id','desc')
            ->take(1)
            ->get();
        $sumDebe = 0;
        $sumHaber = 0;
        if( $numeros == null){
            $num = 1;
            $transactions = DB::table('nomenclators')
                ->where('account_id',$num)
                ->join('transactions','nomenclators.id','=','transactions.nomenclator_id')
                //->select('nomenclators_id','cuenta','tipo','monto')
                ->get();
            foreach ($transactions as $total) {
                if ($total->tipo == 'debe'){
                    $sumDebe = $sumDebe + $total->monto;
                }elseif ($total->tipo == 'haber')
                    $sumHaber = $sumHaber + $total->monto;
            }
            return view('comprobante.comprobante',compact('date','num','transactions','sumDebe','sumHaber'));
        }
        $num = $numeros[0]->id +1;
        $transactions = DB::table('nomenclators')
            ->where('account_id',$num)
            ->join('transactions','nomenclators.id','=','transactions.nomenclator_id')
            //->select('nomenclators_id','cuenta','tipo','monto')
            ->get();
        //suma

        foreach ($transactions as $total) {
            if ($total->tipo == 'debe'){
                $sumDebe = $sumDebe + $total->monto;
            }elseif ($total->tipo == 'haber')
            $sumHaber = $sumHaber + $total->monto;
        }


        return view('comprobante.comprobante',compact('date','num','transactions','sumDebe','sumHaber'));
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
    public function store(AccountRequest $request)
    {
        $account = new Account([
            'glosa'         => $request['glosa'],
            'montoDebe'     => $request['sumDebe'],
            'montoHaber'    => $request['sumHaber'],
            'transaction_id' => $request['nume']
        ]);
        $account->save();
        Session::flash('message','Comprobante creado');
        return redirect()->route('newAccount');

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
