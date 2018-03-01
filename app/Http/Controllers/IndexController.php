<?php

namespace App\Http\Controllers;

use App\Entities\Category;
use App\Entities\CategoryArticle;
use App\Entities\Tag;
use Illuminate\Http\Request;
use App\Entities\Article;
//use App\Entities\User;

class IndexController extends Controller
{

    protected $name_of_site;

    // Конструктор Клоса IndexController
    public function __construct(){
        $this->name_of_site = "RomaNews";
    }
    //
    public function  index(){
        $objCategory = new Category();                                //Об*єкт категорій
        $categories = $objCategory->select('id','title')->get();      //вибираємо всі записи таблиці категорії

        $articles = Article::with('categories','tags')->orderBy('id','desc')->paginate(6);

        return view('home_page')->with(['name_of_site'=>$this->name_of_site,
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
        $tag_of_news = $objarticle->tags;    //відповідні категорій статті


//        $article = Article::select('id','title','full_description','created_at')->where('id',$id)->first();
//        dump($article);
        return view('article-content')->with(['name_of_site'=>$this->name_of_site,
                                                    'article'=>$objarticle,
                                                    'category_of_news'=>$category_of_news,
                                                    'tag_of_news'=>$tag_of_news,
                                                    'categories'=>$categories
                                                        ]); //предаємо декілька зміних черезмасив [ключ => зміна]
                                                                             // в resources-> views-> article-content.blade.php
    }


    public function find_by_cat($id_cat, $slug_cat)
    {
//        $category = Category::find($id_cat);
//        $articles_cat = $category->articles;

        $articles_cat = Category::with('articles')->where('id',$id_cat )->get();
//        dd($articles_cat);

        $objCategory1 = new Category();
        $categories = $objCategory1->select('id','title')->get();

        return view('art_by_cat')->with([ 'name_of_site'=>$this->name_of_site,
                                                'articles_cat'=>$articles_cat,
                                                'categories'=>$categories]);
    }
//
    public function find_art_by_tag($tag_id, $tag_slug)
    {
        $articles_cat = Tag::with('articles')->where('id',$tag_id )->get();


//        dd($articles_cat);

        $objCategory1 = new Category();
        $categories = $objCategory1->select('id','title')->get();

        return view('art_by_cat')->with([ 'name_of_site'=>$this->name_of_site,
                                                'articles_cat'=>$articles_cat,
                                                'categories'=>$categories]);
    }
}