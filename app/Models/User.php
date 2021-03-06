<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
         'title',
         'body',
         'photos',
         'excerpt'
    ];

    public $timestamps=true;
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getImagePathAttribute(){
        return 'upload/photos/'.$this->photos;
    }

    public static function search($search){
        return empty($search) ? static::query() :
        static::where('title','LIKE','%'.$search.'%')
        ->OrWhere('excerpt','LIKE','%'.$search.'%')
        ->OrWhere('body','LIKE','%'.$search.'%')
        ->OrWhere('created_at','LIKE','%'.$search.'%'); 
    }
    
}
