<?php

namespace App\Repositories;

use App\Models\Currency;
use App\Repositories\BaseRepository;

/**
 * Class CurrencyRepository
 * @package App\Repositories
 * @version July 30, 2020, 4:47 am UTC
*/

class CurrencyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'country',
        'currency',
        'code',
        'symbol'
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
        return Currency::class;
    }
}
