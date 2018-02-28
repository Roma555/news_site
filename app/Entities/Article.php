<?php

//namespace App;
namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = "articles";     //
    protected $primaryKey = "id";


    protected $fillable = [
        'title',
        'author',
        'short_description',
        'full_description',
        'news_imagine',
        'keywords'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /*********Relation************/

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_articles', 'article_id',
            'category_id');
        //зв*зок багато до багатьох (модель з якою звязуєм, таблиця через яку ми звізуєм, зовнішній ключ(ключ моделі не відноситься до моделі з якою ми звязуєм),
        //внутрішній ключ(не відноситься до моделі яку ми звязуєм))
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_articles', 'article_id',
            'tag_id');
        //зв*зок багато до багатьох (модель з якою звязуєм, таблиця через яку ми звізуєм, зовнішній ключ(ключ моделі не відноситься до моделі з якою ми звязуєм),
        //внутрішній ключ(не відноситься до моделі яку ми звязуєм))
    }
}
