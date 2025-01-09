<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

class Equipo extends Model
{

    use SoftDeletes;
    use HasFactory;

    public $table = 'equipos';

    public $fillable = [
        'numero_serie',
        'imei',
        'modelo_id',
        'marca_id',
        'tipo_id'
    ];

    protected $casts = [
        'numero_serie' => 'string',
        'imei' => 'string'
    ];

    public static $rules = [
        'numero_serie' => 'required|string|max:45',
        'imei' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'modelo_id' => 'required',
        'marca_id' => 'required',
        'tipo_id' => 'required'
    ];

    public static $messages = [

    ];

    public function marca(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Marca::class, 'marca_id');
    }

    public function modelo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Modelo::class, 'modelo_id');
    }

    public function tipo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Tipo::class, 'tipo_id');
    }

    public function servicios(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Servicio::class, 'equipo_id');
    }
}
