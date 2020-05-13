<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Encargado
 * @package App\Models
 * @version May 4, 2020, 11:21 pm UTC
 *
 * @property string $name
 * @property string $dni
 * @property string $direccion
 * @property string $telefono
 * @property string $foto
 */
class Encargado extends Model
{
    use SoftDeletes;

    public $table = 'encargados';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'dni',
        'direccion',
        'telefono',
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'dni' => 'string',
        'direccion' => 'string',
        'telefono' => 'string',
        'foto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'dni' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'foto' => 'required'
    ];

    
}
