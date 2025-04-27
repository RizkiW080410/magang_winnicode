<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pangan extends Model
{
    use HasFactory;

    protected $fillable = ['terbit_pangan_id', 'name', 'description', 'harga', 'image'];

    public function terbitPangan()
    {
        return $this->belongsTo(TerbitPangan::class);
    }
}
