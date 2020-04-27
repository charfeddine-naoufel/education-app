<?php

namespace App\Repositories;

use App\Models\course;
use App\Repositories\BaseRepository;

/**
 * Class courseRepository
 * @package App\Repositories
 * @version April 4, 2020, 6:45 pm UTC
*/

class courseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'categorie_id',
        'title',
        'description',
        'about_instructor',
        'dscount_price',
        'actual_price',
        'playlist_url',
        'view_count',
        'subscriber_count',
        'status',
        'photo'
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
        return course::class;
    }
}
