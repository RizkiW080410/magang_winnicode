<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryBerita extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function beritas()
    {
        return $this->hasMany(Berita::class);
    }
}
