<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tipo extends Model
{

    use SoftDeletes;
    use HasFactory;

    public $table = 'tipos';

    public $fillable = [
        'nombre',
        'descripcion'
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
        'deleted_at' => 'nullable'
    ];

    public static $messages = [

    ];

    public function equipos(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Equipo::class, 'tipo_id');
    }
}
