<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basskets extends Model
{
    protected $fillable = ['count', 'id_product', 'id_user'];
}
