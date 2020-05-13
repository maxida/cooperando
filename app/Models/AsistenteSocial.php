<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AsistenteSocial
 * @package App\Models
 * @version May 6, 2020, 5:00 pm UTC
 *
 * @property string $nombre
 * @property string $dni
 * @property string $matricula
 * @property string $direccion
 * @property string $telefono
 * @property string $foto
 */
class AsistenteSocial extends Model
{
    use SoftDeletes;

    public $table = 'asistente_socials';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'dni',
        'matricula',
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
        'nombre' => 'string',
        'dni' => 'string',
        'matricula' => 'string',
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
        'nombre' => 'required',
        'dni' => 'required',
        'matricula' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'foto' => 'required'
    ];

    
}
