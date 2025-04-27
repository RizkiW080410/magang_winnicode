<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TerbitPangan extends Model
{
    use HasFactory;

    protected $fillable = ['last_update', 'sumber'];

    public function pangans()
    {
        return $this->hasMany(Pangan::class);
    }
}
