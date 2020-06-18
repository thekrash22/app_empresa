<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Company
 * @package App\Models
 * @version June 7, 2020, 7:26 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $employees
 * @property string $name
 * @property string $nit
 * @property string $address
 */
class Company extends Model
{
    use SoftDeletes;

    public $table = 'companies';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'nit',
        'address'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'nit' => 'string',
        'address' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function employees()
    {
        return $this->hasMany(\App\Models\Employee::class);
    }
}
