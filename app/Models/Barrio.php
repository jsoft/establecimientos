<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{
    use HasFactory;
    protected $table = 'barrios';

    protected $fillable = ['nombre', 'localidad_id'];

    public function localidad()
    {
        return $this->belongsTo(Localidad::class);
    }

    public function establecimeintos()
    {
        return $this->hasMany(Establecimiento::class);
    }
}
