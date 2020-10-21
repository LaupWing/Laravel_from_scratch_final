<?php

namespace App\Models;

use App\Followable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
   use HasFactory, Notifiable, Followable;

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
      'name',
      'username',
      'email',
      'password',
      'avatar'
   ];

   /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
   protected $hidden = [
      'password',
      'remember_token',
   ];

   /**
    * The attributes that should be cast to native types.
    *
    * @var array
    */
   protected $casts = [
      'email_verified_at' => 'datetime',
   ];
   public function timeline()
   {
      $ids = $this->follows()->pluck('id');
      $ids->push($this->id);

      return Tweet::whereIn('user_id', $ids)->latest()->get();
   }

   public function setPasswordAttribute($value)
   {
      $this->attributes['password'] = bcrypt($value);
   }

   public function tweets()
   {
      return $this->hasMany(Tweet::class)->latest();
   }

   public function path($append = '')
   {
      $path =  route('profile', $this->username);

      return $append ? "{$path}/{$append}" : $path;
   }

   public function getAvatarAttribute($value)
   {
      return asset('storage/' . $value);
   }
}
