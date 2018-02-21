<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';        //таблиця categories в базі
    protected $primaryKey = 'id';           // поле id з первиним ключом в таблиці categories (індетифікує)

    protected $fillable = [
        'title',
        'description'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
