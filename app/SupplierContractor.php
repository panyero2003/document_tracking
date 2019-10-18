<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierContractor extends Model
{
    protected $fillable = [
    	'constname',
    	'address',
    	'contactno',
    	'mobileno',
    	'liasonname',
    	'taxid'
    ];
}
