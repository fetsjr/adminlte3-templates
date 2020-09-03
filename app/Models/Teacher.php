<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Teacher
 * @package App\Models
 * @version September 2, 2020, 6:07 am UTC
 *
 * @property \App\Models\User $user
 * @property integer $user_id
 * @property string $name
 * @property string $designation
 * @property string $birthday
 * @property string $gender
 * @property string $religion
 * @property string $phone
 * @property string $joining_date
 */
class Teacher extends Model
{
    use SoftDeletes;

    public $table = 'teachersDatatables';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'name',
        'designation',
        'birthday',
        'gender',
        'religion',
        'phone',
        'joining_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'name' => 'string',
        'designation' => 'string',
        'birthday' => 'date',
        'gender' => 'string',
        'religion' => 'string',
        'phone' => 'string',
        'joining_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function user()
    {
        return $this->hasOne(\App\Models\User::class, 'id', 'user_id');
    }
}
