<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsRegistration extends Model
{
    protected $fillable = [    
                            'sname','fname', 'mname','address','profession','mobile', 
                            'email','sscpasyr','edugroup','regno','picture','regfees',
                            'qty','user_id'
                        ];
}
