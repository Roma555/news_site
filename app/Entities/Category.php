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
    public function articles()
    {
        return $this->belongsToMany(Article::class, 'category_articles', 'category_id',
            'article_id');
        //зв*зок багато до багатьох (модель з якою звязуєм, таблиця через яку ми звізуєм, зовнішній ключ(ключ моделі не відноситься до моделі з якою ми звязуєм),
        //внутрішній ключ(не відноситься до моделі яку ми звязуєм))
    }
}
