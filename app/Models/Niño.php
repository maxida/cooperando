<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Niño
 * @package App\Models
 * @version May 5, 2020, 1:45 am UTC
 *
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property string $dni
 * @property string $peso
 * @property string $talla
 * @property string $foto
 */
class Niño extends Model
{
    use SoftDeletes;

    public $table = 'niños';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'dni',
        'peso',
        'talla',
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'direccion' => 'string',
        'telefono' => 'string',
        'dni' => 'string',
        'peso' => 'string',
        'talla' => 'string',
        'foto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'dni' => 'required',
        'peso' => 'required',
        'talla' => 'required',
        'foto' => 'required'
    ];

    
}
