<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class course
 * @package App\Models
 * @version April 4, 2020, 6:45 pm UTC
 *
 * @property integer user_id
 * @property integer categorie_id
 * @property string title
 * @property string description
 * @property string about_instructor
 * @property number dscount_price
 * @property number actual_price
 * @property string playlist_url
 * @property integer view_count
 * @property integer subscriber_count
 * @property integer status
 * @property string photo
 */
class course extends Model
{
    use SoftDeletes;

    public $table = 'courses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'categorie_id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'about_instructor' => 'string',
        'dscount_price' => 'float',
        'actual_price' => 'float',
        'playlist_url' => 'string',
        'view_count' => 'integer',
        'subscriber_count' => 'integer',
        'status' => 'integer',
        'photo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'categorie_id' => 'required',
        'title' => 'required',
        'description' => 'required',
        'about_instructor' => 'required',
        'dscount_price' => 'required',
        'actual_price' => 'required',
        'playlist_url' => 'required',
        'view_count' => 'required',
        'subscriber_count' => 'required',
        'status' => 'required'
    ];

    
}
