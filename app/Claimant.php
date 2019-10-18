<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claimant extends Model
{
	protected $fillable = [
    	'claimantname',
    	'address',
    	'claimanttype',
    	'claimantno',
    	'agencyname',
    	'contactno',
    	'mobileno',
    	'categoryclient_id'
    ];
    public function categoryclient(){

    	return $this->belongsTo('App\Categoryclient');
    }
}
