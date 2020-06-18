<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Data
 * @package App\Models
 * @version June 10, 2020, 12:26 am UTC
 *
 */
class Data extends Model
{
    use SoftDeletes;

    public $table = 'data';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'cedula',
        'origen',
        'destino',
        'empresa',
        'nit'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
