<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Caso extends Model
{
    use HasFactory, SoftDeletes, Uuids;

    protected $primaryKey = 'ID_CASO';


    public function modelos()
    {
        return $this->hasMany(Modelo::class, 'ID_CASO', 'ID_CASO');
    }
}
