<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Profile
 * @package App\Models
 * @version April 7, 2020, 10:54 pm UTC
 *
 * @property integer user_id
 * @property string title
 * @property string first_name
 * @property string last_name
 * @property string phone_number
 * @property string email
 * @property string address
 * @property string date_of_birth
 * @property string career_description
 * @property string personal_website
 * @property string gender
 */
class Profile extends Model
{
    use SoftDeletes;

    public $table = 'profiles';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'title',
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'address',
        'date_of_birth',
        'career_description',
        'personal_website',
        'gender'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'title' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'phone_number' => 'string',
        'email' => 'string',
        'address' => 'string',
        'date_of_birth' => 'date',
        'career_description' => 'string',
        'personal_website' => 'string',
        'gender' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'title' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'phone_number' => 'required',
        'email' => 'required',
        'address' => 'required',
        'date_of_birth' => 'required',
        'career_description' => 'required',
        'gender' => 'required'
    ];

    
}
