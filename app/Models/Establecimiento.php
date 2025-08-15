<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Establecimiento extends Model
{
    use HasFactory;
    protected $table = 'establecimientos';

    protected $fillable = ['nombre', 'direccion', 'barrio_id', 'categoria_id', 'coordenadas_lat', 'coordenadas_long', 'descripcion'];

    public function barrio()
    {
        return $this->belongsTo(Barrio::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function valoraciones()
    {
        return $this->hasMany(valoracion::class);
    }

    public function getPromedioValoracionAttribute()
    {
        return $this->valoraciones()->avg('calificacion');
    }

    public function scopeByCategoria(Builder $query, $filtro)
    {
        return $query->when($filtro, function ($query) use ($filtro) {
            $query->where('categoria_id', $filtro);
        });
    }
}
