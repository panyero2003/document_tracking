<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = [
        'id',
    	'dep_id',
    	'const_id',
    	'claimant_id',
        'department',
        'contractor',
        'claimant',
    	'pboobrno',
    	'payee',
    	'pbodate',
        'pboacctcode',
        'pbosource_id',
        'obrpart',
        'pboreldate',
        'pboreleasedreason',
        'obramt',
        'pbostatus_id',
        'pacctostatus_id',
        'pacctoreleasedto',
        'pacctoreleasedreason',
        'pacctodate',
        'pacctoreldate',
        'ptostatusdatetime',
        'ptodate',
        'ptostatus_id',
        'ptoreldate',
        'ptoreleasedto',
        'ptoreleasedreason',
        'pgodate',
        'pgostatus_id',
        'pgoreldate',
        'pgoreleasedto',
        'pgoreleasedreason',
        'is_released_bac',
        'is_released',
        'is_released_account',
        'is_released_pgo',
        'is_released_pgso',
        'is_released_treas'
    	
    ];

    public function department()
    {
    	return $this->belongsTo('App\Department','dep_id');
    }

    public function voucher_department()
    {
        return $this->belongsTo('App\Department','voucher_id');
    }


    public function contractor()
    {
    	return $this->belongsTo('App\SupplierContractor','const_id');
    }

    public function claimant()
    {
    	return $this->belongsTo('App\Claimant','claimant_id');
    }

    public function pbo_status()
    {
        return $this->belongsTo('App\Status','pbostatus_id');
    }

    public function accounting_status()
    {
        return $this->belongsTo('App\Status','pacctostatus_id');
    }

    public function treas_status()
    {
        return $this->belongsTo('App\Status','ptostatus_id');
    }

    public function pgo_status()
    {
        return $this->belongsTo('App\Status','pgostatus_id');
    }
}
