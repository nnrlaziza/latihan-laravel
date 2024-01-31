<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    use HasFactory;
    public function store(){
        return $this->hasMany(Store::class); //untuk 1kebanyak 
    }
}
