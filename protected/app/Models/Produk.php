<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
    	'id' , 'user_id' , 'marek' , 'jumlah' ,'harga' 
    ];

    public $timestamps = true;

    
    public function uid()
    {
    	return $this->belongsTo('App\user' , 'user_id');
    } 
}
