<?php

namespace App\Repositories;

use App\Models\comment;
use App\Repositories\BaseRepository;

/**
 * Class commentRepository
 * @package App\Repositories
 * @version April 4, 2020, 6:44 pm UTC
*/

class commentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'course_id',
        'category_id',
        'body',
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
        return comment::class;
    }
}
