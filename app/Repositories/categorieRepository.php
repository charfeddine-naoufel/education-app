<?php

namespace App\Repositories;

use App\Models\categorie;
use App\Repositories\BaseRepository;

/**
 * Class categorieRepository
 * @package App\Repositories
 * @version April 4, 2020, 6:00 pm UTC
*/

class categorieRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'view_count'
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
        return categorie::class;
    }
}
