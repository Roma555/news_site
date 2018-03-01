<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $table = "tags";     //
    protected $primaryKey = "id";


    protected $fillable = [
        'title',
        'description',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
    /*********Relation************/

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'tag_articles', 'tag_id',
            'article_id');
        //зв*зок багато до багатьох (модель з якою звязуєм, таблиця через яку ми звізуєм, зовнішній ключ(ключ моделі не відноситься до моделі з якою ми звязуєм),
        //внутрішній ключ(не відноситься до моделі яку ми звязуєм))
    }
}
