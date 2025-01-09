<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

class Servicio extends Model
{

    use SoftDeletes;
    use HasFactory;

    public $table = 'servicios';

    public $fillable = [
        'precio',
        'fecha_recepcion',
        'problema',
        'fecha_diagnostico',
        'diagnostico',
        'fecha_entrega',
        'solucion',
        'cliente_id',
        'user_id',
        'equipo_id',
        'estado_id'
    ];

    protected $casts = [
        'precio' => 'decimal:2',
        'fecha_recepcion' => 'datetime',
        'problema' => 'string',
        'fecha_diagnostico' => 'datetime',
        'diagnostico' => 'string',
        'fecha_entrega' => 'datetime',
        'solucion' => 'string'
    ];

    public static $rules = [
        'precio' => 'required|numeric',
        'fecha_recepcion' => 'required',
        'problema' => 'required|string|max:65535',
        'fecha_diagnostico' => 'nullable',
        'diagnostico' => 'nullable|string|max:65535',
        'fecha_entrega' => 'nullable',
        'solucion' => 'nullable|string|max:65535',
        'cliente_id' => 'required',
        'user_id' => 'nullable',
        'equipo_id' => 'required',
        'estado_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public static $messages = [

    ];

    public function cliente(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'cliente_id');
    }

    public function equipo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Equipo::class, 'equipo_id');
    }

    public function estado(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Estado::class, 'estado_id');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
