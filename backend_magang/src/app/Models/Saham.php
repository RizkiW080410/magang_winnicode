<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Saham extends Model
{
    use HasFactory;

    protected $fillable = ['terbit_saham_id', 'category_saham_id', 'name', 'harga', 'harga_perhari', 'persen_perhari', 'icon'];

    public function terbitSaham()
    {
        return $this->belongsTo(TerbitSaham::class);
    }

    public function categorySaham()
    {
        return $this->belongsTo(CategorySaham::class);
    }
}
