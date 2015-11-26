<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomenclator extends Model
{
    protected $table = 'nomenclators';
    protected $fillable = ['id', 'cuenta'];

    public function transaction(){
        return $this->belongsTo('App\Transaction');
    }
}
