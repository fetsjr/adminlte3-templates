<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Currency
 * @package App\Models
 * @version July 30, 2020, 4:47 am UTC
 *
 * @property string $country
 * @property string $currency
 * @property string $code
 * @property string $symbol
 */
class Currency extends Model
{
    use SoftDeletes;

    public $table = 'currencies';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'country',
        'currency',
        'code',
        'symbol'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'country' => 'string',
        'currency' => 'string',
        'code' => 'string',
        'symbol' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
