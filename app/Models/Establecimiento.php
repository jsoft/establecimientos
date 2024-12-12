<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    use HasFactory;
    protected $table = 'establecimientos';

    protected $fillable = ['nombre', 'direccion', 'ciudad_id', 'categoria_id'];

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
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
