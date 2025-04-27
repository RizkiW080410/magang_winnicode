<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SosisalMedia extends Model
{
    use HasFactory;

    protected $fillable = ['icon', 'name', 'link'];
}
