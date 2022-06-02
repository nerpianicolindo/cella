<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class STL extends Model
{
    use HasFactory, SoftDeletes, Uuids;

    protected $primaryKey = 'ID_STL';
}
