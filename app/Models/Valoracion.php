<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class valoracion extends Model
{
    use HasFactory;
    protected $table = 'valoraciones';

    protected $fillable = ['calificacion', 'comentario', 'fecha', 'usuario_id', 'cafeteria_id'];

    public function establecimientos()
    {
        return $this->belongsTo(Establecimiento::class);
    }

    public function usuarios()
    {
        return $this->belongsTo(User::class);
    }
}
