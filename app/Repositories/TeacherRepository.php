<?php

namespace App\Repositories;

use App\Models\Teacher;
use App\Repositories\BaseRepository;

/**
 * Class TeacherRepository
 * @package App\Repositories
 * @version September 2, 2020, 6:07 am UTC
*/

class TeacherRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Teacher::class;
    }
}
