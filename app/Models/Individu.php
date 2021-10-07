<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Individu
 * @package App\Models
 * @version September 30, 2021, 1:31 am UTC
 *
 * @property string $nik
 * @property string $nama
 * @property string $alamat
 */
class Individu extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'individus';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nik',
        'nama',
        'alamat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nik' => 'string',
        'nama' => 'string',
        'alamat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nik' => 'required',
        'nama' => 'required'
    ];

    
}
