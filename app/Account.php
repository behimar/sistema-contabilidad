<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'accounts';
    protected $fillable = ['fecha', 'ciudad','glosa','montoDebe','montoHaber'];

    public function transaction(){
        return $this->hasMany('App\Transaction');
    }
}
