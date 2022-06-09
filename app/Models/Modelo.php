<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modelo extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'ID_CASO', 'nombre', 'tipo', 'created_at'
    ];

    protected $hidden = [
        'updated_at', 'deleted_at'
    ];

    public function caso()
    {
        return $this->belongsTo(Caso::class, 'id', 'ID_CASO');
    }

    public function stls()
    {
        return $this->hasMany(STL::class, 'ID_MODELO', 'id');
    }
}
