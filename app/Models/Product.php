<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'Producttype_id', 'user_id', 'description', 'price','unit', 'stock'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function producttype()
    {
        return $this->belongsTo(Producttype::class);
    }
    
}
