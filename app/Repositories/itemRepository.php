<?php

namespace App\Repositories;

use App\Models\item;
use App\Repositories\BaseRepository;

/**
 * Class itemRepository
 * @package App\Repositories
 * @version April 4, 2020, 6:46 pm UTC
*/

class itemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'course_id',
        'view_count',
        'url',
        'description'
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
        return item::class;
    }
}
