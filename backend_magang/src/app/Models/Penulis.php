<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penulis extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'telepon',
        'pendidikan',
        'bio',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
