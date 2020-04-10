<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Education
 * @package App\Models
 * @version April 9, 2020, 5:32 pm UTC
 *
 * @property string school_name
 * @property string school_web
 * @property string degree_name
 * @property string grade
 * @property string year_in
 * @property string year_out
 * @property string education_level
 */
class Education extends Model
{
    use SoftDeletes;

    public $table = 'education';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'school_name',
        'school_web',
        'degree_name',
        'grade',
        'year_in',
        'year_out',
        'user_id',
        'education_level'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'school_name' => 'string',
        'school_web' => 'string',
        'degree_name' => 'string',
        'grade' => 'string',
        'year_in' => 'date',
        'year_out' => 'date',
        'user_id'=>'integer',
        'education_level' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'school_name' => 'required',
        'degree_name' => 'required',
        'grade' => 'required',
        'year_in' => 'required',
        'year_out' => 'required',
        'user_id' =>'required',
        'education_level' => 'required'
    ];

    
}
