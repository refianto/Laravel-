<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $fillable = [
    	'id' , 'user_id' , 'total'
    ];

    public $timestamps = true;


    public function user()
    {
    	return $this->belongsTo('App\user','user_id');
    }
}
