<?php

namespace App\Repositories;

use App\Models\role;
use App\Repositories\BaseRepository;

/**
 * Class roleRepository
 * @package App\Repositories
 * @version April 9, 2020, 3:43 pm UTC
*/

class roleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return role::class;
    }
}
