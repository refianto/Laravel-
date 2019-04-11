<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    protected $fillable = [
    	'id' , 'user_id' , 'reward'
    ];

    public $timestamps = true;


    
    public function uid()
    {
    	return $this->belongsTo('App\user' , 'user_id');
    }
}
