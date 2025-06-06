<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Balasan extends Model
{
    use HasFactory;

    protected $fillable = ['komentar_id', 'user_id', 'reply'];

    public function komentars()
    {
        return $this->belongsTo(Komentar::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
