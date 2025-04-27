<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'category_berita_id', 'title', 'tanggal_terbit', 'isi_berita', 'image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categoryBerita()
    {
        return $this->belongsTo(CategoryBerita::class);
    }
}
