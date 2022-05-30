<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cinemas;

class Movies extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'rating', 'genre'];
    public function cinemas()
    {
        return $this->hasOne(Cinemas::class, 'movies_id', 'id');
    }
}
