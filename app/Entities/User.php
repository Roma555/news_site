<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';      //таблиця users в базі
    protected $primaryKey = 'id';    // поле id з первиним ключом в таблиці users (індетифікує)

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [           //список заповнити поля
//      'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $hidden = [             //список пароля і токена
        'password', 'remember_token',
    ];

    //Мутатори
    protected $casts = [
        'id'             => 'integer',
        'email'          => 'string',
        'password'       => 'string',
        'isAdmin'        => 'boolean',
        'remember_token' => 'string',
        'created_at'     => 'datetime',
        'updated_at'     => 'datetime'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

}
