<?php

namespace App\Models;

use Carbon\Carbon;
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
    public function Comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }
}
