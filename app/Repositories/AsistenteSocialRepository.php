<?php

namespace App\Repositories;

use App\Models\AsistenteSocial;
use App\Repositories\BaseRepository;

/**
 * Class AsistenteSocialRepository
 * @package App\Repositories
 * @version May 6, 2020, 5:00 pm UTC
*/

class AsistenteSocialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'dni',
        'matricula',
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
        return AsistenteSocial::class;
    }
}
