<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modelo extends Model
{
    use HasFactory, SoftDeletes, Uuids;

    protected $primaryKey = 'ID_MODELO';

    public function stls()
    {
        return $this->hasMany(STL::class, 'ID_MODELO', 'ID_MODELO');
    }
}
