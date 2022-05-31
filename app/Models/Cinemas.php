<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movies;

class Cinemas extends Model
{
    use HasFactory;
    protected $fillable = ['cinema_name'];
    public function movies()
    {
        return $this->hasOne(Movies::class);
    }



}
