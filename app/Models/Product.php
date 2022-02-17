<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Review;

class Product extends Model
{
  
    use HasFactory;

    // protected $fillable = ["name", "details","discount","price","stock"];

    public function reviews()
    {
      return $this->hasMany(Review::class);
    }
}
