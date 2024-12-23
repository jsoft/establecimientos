<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    use HasFactory;
    protected $table = 'establecimientos';

    protected $fillable = ['nombre', 'direccion', 'barrio_id', 'categoria_id', 'coordenadas_lat', 'coordenadas_long'];

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
}
