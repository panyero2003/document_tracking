<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VoucherNoOBR extends Model
{
    protected $fillable = [
        'id',
    	'dep_id',
    	'const_id',
    	'claimant_id',
        'dvno',
    	'payee',
    	'pacctorecdate',
    	
    ];

    public function department()
    {
    	return $this->belongsTo('App\Department','dep_id');
    }

    public function contractor()
    {
    	return $this->belongsTo('App\SupplierContractor','const_id');
    }

    public function claimant()
    {
    	return $this->belongsTo('App\Claimant','claimant_id');
    }
}
