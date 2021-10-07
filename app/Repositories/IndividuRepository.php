<?php

namespace App\Repositories;

use App\Models\Individu;
use App\Repositories\BaseRepository;

/**
 * Class IndividuRepository
 * @package App\Repositories
 * @version September 30, 2021, 1:31 am UTC
*/

class IndividuRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nik',
        'nama',
        'alamat'
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
        return Individu::class;
    }
}
