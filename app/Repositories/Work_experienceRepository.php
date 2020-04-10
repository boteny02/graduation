<?php

namespace App\Repositories;

use App\Models\Work_experience;
use App\Repositories\BaseRepository;

/**
 * Class Work_experienceRepository
 * @package App\Repositories
 * @version April 8, 2020, 1:17 pm UTC
*/

class Work_experienceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Work_experience::class;
    }
}
