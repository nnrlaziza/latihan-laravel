<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    public function bookCategory(){
        return $this->belongsTo(BookCategory::class); //untuk 1ke1 
    }
    public function author(){
    return $this->belongsTo(User::class, 'user_id');    
    }
}
