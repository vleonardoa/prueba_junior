<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

class Modelo extends Model
{

    use SoftDeletes;
    use HasFactory;

    public $table = 'modelos';

    public $fillable = [
        'nombre',
        'descripcion',
        'marca_id'
    ];

    protected $casts = [
        'nombre' => 'string',
        'descripcion' => 'string'
    ];

    public static $rules = [
        'nombre' => 'required|string|max:45',
        'descripcion' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'marca_id' => 'required'
    ];

    public static $messages = [

    ];

    public function marca(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Marca::class, 'marca_id');
    }

    public function equipos(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Equipo::class, 'modelo_id');
    }
}
