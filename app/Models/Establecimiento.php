<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    use HasFactory;
    protected $table = 'establecimientos';

    protected $fillable = ['categoria_id', 'ciudad_id', 'nombre'];

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
