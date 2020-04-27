<?php

namespace App\Repositories;

use App\Models\view;
use App\Repositories\BaseRepository;

/**
 * Class viewRepository
 * @package App\Repositories
 * @version April 8, 2020, 3:37 pm UTC
*/

class viewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return view::class;
    }
}
