<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TerbitSaham extends Model
{
    use HasFactory;

    protected $fillable = ['last_update', 'sumber'];

    public function sahams()
    {
        return $this->hasMany(Saham::class);
    }
}
