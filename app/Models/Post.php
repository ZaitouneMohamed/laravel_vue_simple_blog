<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "slug",
        "image",
        "categorie_id",
        "body"
    ];

    public function Categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
