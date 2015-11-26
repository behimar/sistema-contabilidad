<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $fillable = ['nomenclator_id','tipo','monto','account_id'];

    public function nomenclator(){
        return $this->hasOne('App\Nomenclator');
    }
}
