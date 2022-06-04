<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Caso extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'trazabilidad_hospital', 'created_at'
    ];


    public function modelos()
    {
        return $this->hasMany(Modelo::class, 'ID_CASO', 'id');
    }
}
