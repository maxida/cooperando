<?php

namespace App\Repositories;

use App\Models\Encargado;
use App\Repositories\BaseRepository;

/**
 * Class EncargadoRepository
 * @package App\Repositories
 * @version May 4, 2020, 11:21 pm UTC
*/

class EncargadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'dni',
        'direccion',
        'telefono',
        'foto'
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
        return Encargado::class;
    }
}
