<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;
    protected $table = 'ciudades';

    protected $fillable = ['nombre', 'departamento_id'];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function establecimientos()
    {
        return $this->hasMany(Establecimiento::class);
    }

    public function barrios()
    {
        return $this->hasMany(Barrio::class);
    }

    public function localidades()
    {
        return $this->hasMany(Localidad::class);
    }

    public function sectores()
    {
        return $this->hasMany(Sector::class);
    }
}
