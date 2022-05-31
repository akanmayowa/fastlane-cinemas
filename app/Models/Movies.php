<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;
    protected $fillable = ['cinema_id','name', 'rating', 'genre', 'showtime'];
    public function cinemas()
    {
        return $this->belongsTo(Cinemas::class, 'cinema_id', 'id');
    }
}
