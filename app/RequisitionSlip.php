<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequisitionSlip extends Model
{

	protected $fillable = [
        'id',
    	'dep_id',
    	'pgsorisno',
    	'pgsodate',
    	'pgsostatus',
    	'pgsostatusdatetime',
    	'pgsoreldate',
        'is_released'
    	
    ];

    public function department()
    {
    	return $this->belongsTo('App\Department','dep_id');
    }
}
