<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class STL extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'ID_MODELO', 'nombre', 'color', 'visible', 'transparencia', 'orden', 'created_at'
    ];

    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'id', 'ID_MODELO');
    }

}
