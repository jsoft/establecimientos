<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['name'];
=======
    protected $table = 'sectores';
    protected $fillable = ['nombre', 'ciudad_id'];

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    }
>>>>>>> 84e8e23e6acf4f5f1ef51443fe0b20871f748b56
}
