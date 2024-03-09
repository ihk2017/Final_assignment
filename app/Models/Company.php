<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name','organizationtype_id','user_id','photo'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function organizationtype()
    {
        return $this->belongsTo(Organizationtype::class);
    }
}


// companies