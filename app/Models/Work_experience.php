<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Work_experience
 * @package App\Models
 * @version April 8, 2020, 1:17 pm UTC
 *
 * @property string Name_of_employer
 * @property string industry_employer
 * @property string job_title
 * @property string year_in
 * @property string year_out
 * @property string job_catergory
 * @property string job_level
 * @property string job_description
 * @property integer user_id
 */
class Work_experience extends Model
{
    use SoftDeletes;

    public $table = 'work_experiences';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Name_of_employer',
        'industry_employer',
        'job_title',
        'year_in',
        'year_out',
        'job_catergory',
        'job_level',
        'job_description',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Name_of_employer' => 'string',
        'industry_employer' => 'string',
        'job_title' => 'string',
        'year_in' => 'date',
        'year_out' => 'date',
        'job_catergory' => 'string',
        'job_level' => 'string',
        'job_description' => 'string',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name_of_employer' => 'required',
        'industry_employer' => 'required',
        'job_title' => 'required',
        'year_in' => 'required',
        'year_out' => 'required',
        'job_catergory' => 'required',
        'job_level' => 'required',
        'job_description' => 'required',
        'user_id' => 'required'
    ];

    
}
