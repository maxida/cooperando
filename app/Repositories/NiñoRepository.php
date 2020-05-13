<?php

namespace App\Repositories;

use App\Models\Niño;
use App\Repositories\BaseRepository;

/**
 * Class NiñoRepository
 * @package App\Repositories
 * @version May 5, 2020, 1:45 am UTC
*/

class NiñoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'direccion',
        'telefono',
        'dni',
        'peso',
        'talla',
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
        return Niño::class;
    }
}
