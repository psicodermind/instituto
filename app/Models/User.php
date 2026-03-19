<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
<<<<<<< HEAD
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'department',
        'dni',
    ];
public static function getLabels()
{
    return __('user');
}

=======
    use HasFactory , HasRoles, Notifiable   ;

  	protected $fillable = ['name', 'email', 'dni', 'phone', 'password'];
>>>>>>> upstream/crudGenerico

          public static function getFields(){
            return __("users.fields");
        }
}
