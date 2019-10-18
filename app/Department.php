<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'id',
    	'depname',
    	'depcode',
    	'depacro',
    	'dephead',
    	'depheademailadd',
    	'contactno',
    	'mobileno',
    	'address'
    ];

    
}
