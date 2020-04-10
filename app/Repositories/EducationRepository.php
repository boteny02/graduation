<?php

namespace App\Repositories;

use App\Models\Education;
use App\Repositories\BaseRepository;

/**
 * Class EducationRepository
 * @package App\Repositories
 * @version April 9, 2020, 5:32 pm UTC
*/

class EducationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'school_name',
        'school_web',
        'degree_name',
        'grade',
        'year_in',
        'year_out',
        'education_level'
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
        return Education::class;
    }
}
