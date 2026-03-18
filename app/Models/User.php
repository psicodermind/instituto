<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

  	protected $fillable = ['name', 'email', 'dni', 'phone', 'password', 'department'];

          public static function getFilds(){
            return "__(users.fields)";
        }
}
