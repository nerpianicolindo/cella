<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Caso extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id';


    public function modelos()
    {
        return $this->hasMany(Modelo::class, 'id', 'ID_CASO');
    }
}
