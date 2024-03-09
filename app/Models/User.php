<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = ['firstName','lastName','email','mobile','password','otp','usertype'];
    protected $attributes = ['otp' => '0'];
    protected $hidden = ['password', 'otp'];

    public function categories()
        {
            return $this->hasMany(Category::class);
        }


        public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
