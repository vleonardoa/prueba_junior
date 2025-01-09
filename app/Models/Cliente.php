<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{

    use SoftDeletes;
    use HasFactory;

    public $table = 'clientes';

    public $fillable = [
        'nombres',
        'apellidos',
        'cui',
        'telefono',
        'direccion'
    ];

    protected $casts = [
        'nombres' => 'string',
        'apellidos' => 'string',
        'cui' => 'string',
        'telefono' => 'string',
        'direccion' => 'string'
    ];

    public static $rules = [
        'nombres' => 'required|string|max:100',
        'apellidos' => 'required|string|max:100',
        'cui' => 'nullable|string|max:13',
        'telefono' => 'nullable|string|max:8',
        'direccion' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public static $messages = [

    ];

    public function servicios(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Servicio::class, 'cliente_id');
    }
}
