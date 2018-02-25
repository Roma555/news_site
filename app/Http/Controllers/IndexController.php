<?php

namespace App\Http\Controllers;

use App\Entities\Category;
use App\Entities\CategoryArticle;
use Illuminate\Http\Request;
use App\Entities\Article;
//use App\Entities\User;

class IndexController extends Controller
{

    protected $message;
    protected $header;
    protected $content;

    // Конструктор Клоса IndexController
    public function __construct(){
        $this->header = "Daily Planet";
        $this->message = 'Hello World!!!!';
        $this->content = 'It*s ukrainian magazine with fashion week';
    }
    //
    public function  index(){
        //return 'hello World cherez controller';
        //$message = 'helo world cherez zminu';
        //return view('page1')->with('message',$message); //предаємо зміну message в resources-> views-> page1.blade.php
//        return view('page1')->with(['header'=>$header,
//                                    'message'=>$message,
//                                    'content'=>$content]); //предаємо декілька зміних черезмасив [ключ => зміна]
//                                                           // в resources-> views-> page1.blade.php
//        $header = "Daily Planet";
//        $message = 'Hello World!!!!';
//        $content = 'It*s ukrainian magazine with fashion week';
//        $articles = Article::all(); //звертаємся до класу Article в моделях і викликаємо статичний метод all() який
//                                    // повертає вибірку всіх записів в таблиці з якою працює дана модель Article

//        $articles = Article::select('id','title','short_description')->get(); //звертаємся до класу Article в моделях і викликаємо
                                                                 //метод конструктора запитів select('назва_поля','','')
                                                                 //який вказує які елементи(поля) будуть вибрані з таблиці
                                                                 //і метод get() який завершує формування запиту(цей
                                                                 //метод також повертає колекцію моделей вибраних елементів)
//        dump($articles); // Вбудована функція хелпер фреймворка(роздруковує вміст масивів, обєктів і так далі)
        $objArticles = new Article();
        $objCategory = new Category();

        $categories = $objCategory->select('id','title')->get();
        $articles= $objArticles->orderBy('id','desc')->paginate(4);
//        dd($articles);
        return view('home_page')->with(['header'=>$this->header,
                                          'message'=>$this->message,
                                          'content'=>$this->content,
                                          'articles'=>$articles,
                                          'categories'=>$categories]); //предаємо декілька зміних черезмасив [ключ => зміна]
                                                                   // в resources-> views-> home_page.blade.php
    }

    public function  show($id, $slug){

        $objarticle = Article::find($id);
        if(!$objarticle){
            return abort("404");
        }
        $objCategory1 = new Category();
        $categories = $objCategory1->select('id','title')->get();

        $category_of_news = $objarticle->categories;    //відповідні категорій статті

//        $article = Article::select('id','title','full_description','created_at')->where('id',$id)->first();
//        dump($article);
        return view('article-content')->with(['message'=>$this->message,
                                                    'content'=>$this->content,
                                                    'article'=>$objarticle,
                                                    'category_of_news'=>$category_of_news,
                                                    'categories'=>$categories
                                                        ]); //предаємо декілька зміних черезмасив [ключ => зміна]
                                                                             // в resources-> views-> article-content.blade.php
    }


    public function find_by_cat($id_cat, $slug_cat)
    {
        $category = Category::find($id_cat);
        $articles_cat = $category->articles;
//        dd($articles_cat);

        $objCategory1 = new Category();
        $categories = $objCategory1->select('id','title')->get();

        return view('art_by_cat')->with(['articles_cat'=>$articles_cat,
                                                'categories'=>$categories]);
    }
}