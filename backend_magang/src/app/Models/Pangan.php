<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pangan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'harga', 'image', 'last_update', 'sumber'];
}
