<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /*public function __construct(){
        $this->middleware('auth');
    }*/

    public function getIndex()
    {
        $cuentas = DB::table('accounts')
            ->join('transactions','accounts.id','=','transactions.account_id')
            ->join('nomenclators','transactions.nomenclator_id','=','nomenclators.id')
            ->select('accounts.id','montoDebe','montoHaber','glosa','accounts.created_at','tipo','nomenclator_id','monto','cuenta')
            ->get();
        $folios = Account::all();
        return view('layouts.main',compact('cuentas','leng','folios'));
    }
}
