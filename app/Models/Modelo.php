<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modelo extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id';

    public function stls()
    {
        return $this->hasMany(STL::class, 'id', 'ID_MODELO');
    }
}
