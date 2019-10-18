<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseRequest extends Model
{
    // protected $dates = ['bacreldate'];

	protected $fillable = [
    	
    	'dep_id',
    	'bacprno',
        'bacrecdate',
        'bacstatus_id',
        'bacreleaseddate',
        'bacdatereleased',
        'bacreleasedto',
        'bacreleasedreason',
        'pboobrno',
        'pdorecdate',
        'pboreldate',
        'pbostatus_id',
    	'pbosource_id',
        'pboreleasedto',
        'pboreleasedreason',
        'obrpart',
        'obrtranstype_id',
        'pboacctcode',
        'obrpart',
        'obrtranstype_id',
        'obramt',
        'pacctostatus_id',
        'pacctopendingremarks',
        'pacctoreleasedto',
        'pacctoreleasedreason',
        'pacctorecdate',
        'pacctoreldate',
        'ptostatusdatetime',
        'ptostatus_id',
        'ptotorecdate',
        'ptoreldate',
        'ptoreleasedto',
        'ptoreleasedreason',
        'pgorecdate',
        
        'pgoreldate',
        'pgoreleasedto',
        'pgoreleasedreason',
        'pgostatus_id',
        'is_released_bac',
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

    public function bac_status()
    {
        return $this->belongsTo('App\Status','bacstatus_id');
    }

    public function budget_status()
    {
        return $this->belongsTo('App\Status','pbostatus_id');
    }

    public function status()
    {
        return $this->belongsTo('App\Status','pbostatus_id');
    }

    public function acstatus()
    {
        return $this->belongsTo('App\Status','pacctostatus_id');
    }

    public function pto_status()
    {
        return $this->belongsTo('App\Status','ptostatus_id');
    }

    public function pgo_status()
    {
        return $this->belongsTo('App\Status','pgostatus_id');
    }

    

}
