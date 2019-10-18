<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $fillable = [
    	
    	'dep_id',
    	'supplier',
    	'address',
    	'ponumber',
    	'bacprno',
        'bacrecdate',
        'bacstatus_id',
        'bacreldate',
        'bac_cat',
        'bac_noticeofaward',
        'bac_contract',
        'bac_noticetoproceed',
        'pboobrno',
        'pdorecdate',
    	'pbosource_id',
        'obrpart',
        'obrtranstype_id',
       'pboacctcode',
        'obrpart',
        'obrtranstype_id',
        'obramt',
        'pbostatus_id',
        'pbostatusdatetime',
        'pboreldate',
        'is_released',
        'is_released_account',
        'is_released_treas',
        'is_released_pgo',
        'is_released_pgso',
        'acc_remarks'
        
    ];

    public function department()
    {
    	return $this->belongsTo('App\Department','dep_id');
    }

    public function source()
    {
        return $this->belongsTo('App\Source','pbosource_id');
    }

    public function status()
    {
        return $this->belongsTo('App\Status','bacstatus_id');
    }

    public function pbostatus()
    {
        return $this->belongsTo('App\Status','pbostatus_id');
    }
}
