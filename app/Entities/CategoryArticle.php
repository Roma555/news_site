<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class CategoryArticle extends Model
{
    //
    protected $table = 'category_articles';        //таблиця categories в базі
    protected $primaryKey = 'id';           // поле id з первиним ключом в таблиці categories (індетифікує)

    protected $fillable = [
        'category_id',
        'article_id'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
